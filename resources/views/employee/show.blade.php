@extends('main.index')

@section('heading')
<h1 id="head">INFORMATION OF {{$emp->name}}</h1>
@endsection

@section('content')    
    @if (session()->has('message'))
        <?php 
            echo '
            <div id="mess" class="alert alert-success">
                <strong>Success!</strong> '.session()->get("message") . '<br>'. session()->get("wel") .'
            </div>
            <script>
                setTimeout(function(){ document.getElementById("mess").style.display = "none"; }, 3000);
            </script>
            ';
        ?>
    @endif
    
    AGE: {{$emp->age}}<br><br>
    JOB: {{$emp->job}}<br><br>
    COMPANY: {{$emp->organisation->name}}<br><br>


<form method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">DELETE</button>
</form>

<button class="btn btn-warning" onclick="location.href='/employees/{{$emp->id}}/edit'">UPDATE</button>
@endsection

@section('foot')
   Enjoy our website's privileges
@endsection