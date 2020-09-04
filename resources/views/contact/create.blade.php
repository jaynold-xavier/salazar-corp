@extends('main.index')

@section('heading')
    <h2 id="head">CONTACT FORM</h2>
@endsection

@section('content')
    <form action="/contact" class="form-horizontal"  method="POST" style="padding: 0 2% 0 15%; text-align: left">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="to">To:</label>
            <div class="col-sm-10">
            <input name="to" class="form-control" value="{{old('to')}}" placeholder="Enter the fully qualified email address">
            <span id="err_mess">{{$errors->first('to')}}</span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="age">Name:</label>
            <div class="col-sm-10">
            <input name="name" class="form-control" placeholder="Enter name here" value="{{old('name')}}">
            <span id="err_mess">{{$errors->first('name')}}</span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="message">Message:</label>
            <div class="col-sm-10">
                <textarea name="message" cols="30" class="form-control" placeholder="Enter the message here"></textarea>
                <span id="err_mess">{{$errors->first('message')}}</span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </form>
@endsection