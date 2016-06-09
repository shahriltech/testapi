
@extends('layout.app')

@section('content')
<h2>User Form</h2>
<hr>
<form action='save' method='POST' role="form" class="form-horizontal">
	<input type="hidden" value='{{csrf_token()}}' name='_token'>

	<div class="form-group">
      	<label class="control-label col-sm-2" for="Firstname">Firstname:</label>
      	<div class="col-sm-10">
       		<input type="text" class="form-control" placeholder="Enter Firstname" name='firstname'>
      	</div>
    </div>
	<div class="form-group">
      	<label class="control-label col-sm-2" for="lastname">Lastname:</label>
      	<div class="col-sm-10">
       		<input type="text" class="form-control" name='lastname' placeholder="Enter Lastname">
      	</div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2" for="address">Address:</label>
      	<div class="col-sm-10">
      		<textarea class='form-control' rows='6' name='address' placeholder='Your Address Here ... '></textarea>
       	</div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2" for="dob">Date Of Birth:</label>
      		<div class="col-sm-10">
       		 	<input type="date" class="form-control" name='dob' placeholder="Enter Date Of Birth">
      		</div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2" for="email">Marital Status:</label>
      		<div class="col-sm-10">
       		 	<input type="text" class="form-control" name='marital_status' placeholder="Enter Marital Status">
      		</div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2" for="email">Phone Number:</label>
      		<div class="col-sm-10">
       		 	<input type="number" class="form-control" name='phone_no' placeholder="Enter Phone Number">
      		</div>
    </div>
    <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-success">Submit</button>
	      <button type="reset" class="btn btn-default">Reset</button>
	      <a href="{{ url('/') }}" class='btn btn-primary'>Back</a>
	    </div>
	</div>
</form>
@endsection