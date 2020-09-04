@extends('main.index')

@section('heading')
    <h1 id="head">REGISTRATION</h1>
    Already have an account? - <a href="/employees/create">Sign IN</a>
@endsection

@section('content')
<form class="form-horizontal" method="POST" action="/employees" style="padding: 0 2% 0 15%; text-align: left">
    @include('employee.form')
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
@endsection

@section('foot')
   Enjoy our website's privileges
@endsection