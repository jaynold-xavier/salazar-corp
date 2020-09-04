@extends('main.index')

@section('heading')
    <h1 id="head">LIST OF Employees</h1>
    <br>
    Does it feel empty in here? <a href="{{route('employees.create')}}">Click here to Register an employee</a>
    <br>
@endsection

@section('content')
    @if (session()->has('message'))
        <?php 
            echo '
            <div id="mess" class="alert alert-danger">
                <strong>Success!</strong> ' . session()->get("message") . '
            </div>
            <script>
                setTimeout(function(){ document.getElementById("mess").style.display = "none"; }, 3000);
            </script>
            ';
        ?>
    @endif
    <div class="container">
        <select class="form-control" onchange="location.href=location.href.split('?')[0]+this.options[this.selectedIndex].value">
            <option value="#" disabled selected>--Sort By--</option>
            <option value="">ID</option>
            <option value="?sort=name">Name</option>
            <option value="?sort=age">Age</option>
        </select><br><br>
        
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>AGE</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($emps as $item)
                    <tr style="cursor: pointer" onclick="location.href='{{url('employees/' . $item->id)}}'">
                        <td>{{$item->id}}</td>
                        <td scope="row">{{$item->name}}</td>
                        <td>{{$item->age}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <br><br>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4>SALES EMPLOYEES</h4>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between ">
                        <span class="badge">ID</span>
                        <span class="badge">NAME</span>
                        <span class="badge">AGE</span>
                        <span class="badge">JOB</span>
                    </li>
                    @foreach ($emp_sales as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center active">
                            <span class="badge badge-danger badge-pill">{{$item->id}}</span>
                            <a href="{{url('employees/' . $item->id)}}" style="color: yellow">{{$item->name}}</a>
                            <span class="badge badge-info badge-pill">{{$item->age}}</span>
                            <span class="badge badge-warning badge-pill">{{$item->job}}</span>
                        </li>
                    @endforeach
                </ul>
              </div>
          <div class="col-lg-6">
            <h4>ENGINEER EMPLOYEES</h4>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between ">
                    <span class="badge">ID</span>
                    <span class="badge">NAME</span>
                    <span class="badge">AGE</span>
                    <span class="badge">JOB</span>
                </li>
                @foreach ($emp_engineer as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center active">
                        <span class="badge badge-danger badge-pill">{{$item->id}}</span>
                        <a href="{{url('employees/' . $item->id)}}" style="color: yellow">{{$item->name}}</a>
                        <span class="badge badge-info badge-pill">{{$item->age}}</span>
                        <span class="badge badge-warning badge-pill">{{$item->job}}</span>
                    </li>
                @endforeach
            </ul>
          </div>
        </div>        
@endsection

@section('foot')
   Enjoy our website's privileges
@endsection