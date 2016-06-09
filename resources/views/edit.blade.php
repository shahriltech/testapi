
@extends('layout.app')

@section('content')
<h2>User Form</h2>
<hr>
<form action='{{ url("/updateuser/$userinfo->id") }}' method='POST' role="form" class="form-horizontal">
	<input type="hidden" value='{{csrf_token()}}' name='_token'>

	<div class="form-group">
      	<label class="control-label col-sm-2" for="Firstname">Firstname:</label>
      	<div class="col-sm-10">
       		<input type="text" class="form-control" value="{{$userinfo->firstname}}" name='firstname' >
      	</div>
    </div>
	<div class="form-group">
      	<label class="control-label col-sm-2" for="lastname">Lastname:</label>
      	<div class="col-sm-10">
       		<input type="text" class="form-control" name='lastname' value="{{$userinfo->lastname}}">
      	</div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2" for="address">Address:</label>
      	<div class="col-sm-10">
      		<textarea class='form-control' rows='6' name='address'>{{$userinfo->address}}</textarea>
       	</div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2" for="dob">Date Of Birth:</label>
      		<div class="col-sm-10">
       		 	<input type="date" class="form-control" name='dob' value='{{$userinfo->dob}}'>
      		</div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2" for="email">Marital Status:</label>
      		<div class="col-sm-10">
       		 	<input type="text" class="form-control" name='marital_status' value='{{$userinfo->marital_status}}'>
      		</div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2" for="email">Phone Number:</label>
      		<div class="col-sm-10">
       		 	<input type="number" class="form-control" name='phone_no' value='{{$userinfo->phone_no}}'>
      		</div>
    </div>
    <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-success">Update</button>
	      <a href="{{ url('/') }}" class='btn btn-primary'>Back</a>
	    </div>
	</div>
</form>
@endsection