@extends('layout.app')

@section('content')
<h2>User Detail</h2>
<hr>
<a href="{{ url('/') }}" class='btn btn-success'>Back</a><br />
<table class='table table-bordered'>
	<tr>
		<td><label>Firstname</label></td>
		<td>{{$userinfo->firstname}}</td>
	</tr>
	<tr>
		<td><label>Lastname</label></td>
		<td>{{$userinfo->lastname}}</td>
	</tr>
	<tr>
		<td><label>Address</label></td>
		<td>{{$userinfo->address}}</td>
	</tr>
	<tr>
		<td><label>Date of Birth</label></td>
		<td>{{$userinfo->dob}}</td>
	</tr>
	<tr>
		<td><label>Marital Status</label></td>
		<td>{{$userinfo->marital_status}}</td>
	</tr>
	<tr>
		<td><label>Phone Number</label></td>
		<td>{{$userinfo->phone_no}}</td>
	</tr>
</table>
@endsection