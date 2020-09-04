@extends('main.index')


@section('heading')
    <h2 id="head">CONTACT FORM</h2>
@endsection

@section('content')
    @if (session()->has('message'))
        <?php 
            echo '
                <div id="mess" class="alert alert-success">
                    <strong>Success!</strong> '.session()->get("message").'
                </div>
                <script>
                    setTimeout(function(){ document.getElementById("mess").style.display = "none"; }, 3000);
                </script>
            ';
        ?> 
    @endif
    <p>Having problems? <a href="{{route('contact.create')}}">Contact us on this page</a></p>
@endsection