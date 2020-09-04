@extends('main.index')

@section('heading')
    <h1 id="head">WELCOME EMPLOYEES!!</h1>
@endsection

@section('content')
    <?php
        echo '
            <h4>Random Employee</h4>
            <img src=' . $img . ' width="20%"> <br><br>
            <b>Name</b> '. $emp->name . '<br><br>
            <b>Age</b> ' . $emp->age . '<br><br>
            <b>Job</b> ' . $emp->job . '<br><br>
            <b>Company</b> ' . $emp->organisation->name
    ?>
@endsection

@section('foot')
   Enjoy our website's privileges
@endsection