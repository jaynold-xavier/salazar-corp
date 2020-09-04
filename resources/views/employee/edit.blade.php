@extends('main.index')

@section('heading')
  <h1 id="head">UPDATE Information of {{$emp->name}}</h1>
@endsection

@section('content')
<form class="form-horizontal" method="POST" action="/employees/{{$emp->id}}" style="padding: 0 2% 0 15%; text-align: left">
    @method('PUT')
    @include('employee.form')
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-warning">Update</button>
      </div>
    </div>
  </form>
@endsection

@section('foot')
   Enjoy our website's privileges
@endsection