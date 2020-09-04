@csrf
<div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
    <input name="name" class="form-control" value="{{old('name') ?? $emp->name}}" placeholder="Enter your full name">
    <span id="err_mess">{{$errors->first('name')}}</span>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="age">Age:</label>
    <div class="col-sm-10">
    <input name="age" class="form-control" placeholder="Enter age" value="{{old('age') ?? $emp->age}}">
    <span id="err_mess">{{$errors->first('age')}}</span>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="organisation_id">Company:</label>
    <div class="col-sm-10">
        <select name="organisation_id" class="form-control">
            <option value="#" selected disabled>---Select a company---</option>
            @foreach ($org as $item)
                <option value="{{$item->id}}" {{(collect(old('organisation_id') ?? $emp->organisation_id)->contains($item->id)) ? 'selected' : ''}}>{{$item->name}}</option>
            @endforeach
        </select>
        <span id="err_mess">{{$errors->first('organisation_id')}}</span>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="job">Job:</label>
    <div class="col-sm-10">
        <select name="job" class="form-control">
            <option value="#" selected disabled>---Select a job---</option>
            @foreach ($jobs as $item)
                <option value="{{$item}}" {{(collect(old('job') ?? $emp->job)->contains($item)) ? 'selected' : ''}}>{{$item}}</option>
            @endforeach
        </select>
        <span id="err_mess">{{$errors->first('job')}}</span>
    </div>
</div>