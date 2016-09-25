@extends('layout.app')

@section('content')
<h2>Users Listing</h2>
<hr>
@if (Session::has('success'))
	<div class="alert alert-success" role='alert'>
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  	<strong>Success!</strong>{{Session::get('success')}}
	</div>
@endif
@if (Session::has('delete'))
	<div class="alert alert-danger" role='alert'>
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  		{{Session::get('delete')}}
	</div>
@endif
<a href="{{ url('/create') }}" class='btn btn-success'>Add User</a><br />
<table class='table table-hover'>
	<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Address</th>
		<th>Actions</th>
	</tr>
	@foreach ($userinfo as $info)
		<tr>
			<td>{{$info->firstname}}</td>
			<td>{{$info->lastname}}</td>
			<td>{{$info->address}}</td>
			<td><a href="/viewdetail/{{$info->id}}" class='btn btn-xs btn-success'>View</a>
			<a href="/edit/{{$info->id}}" class='btn btn-xs btn-primary'>Edit</a>
			<a href="#" class='infoId btn btn-xs btn-danger' data-id='{{$info->id}}' data-toggle="modal" data-target="#confirm-delete">Delete</a></td>

		</tr>

	@endforeach
</table>
	{{ $userinfo->links() }} 
		<!-- pagination -->
	}
<div class="modal fade" id="confirm-delete" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
	    <div class="modal-content ">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Confirmation</h4>
	        </div>
	        <div class="modal-body">
	          <p>Are you sure to delete this user ?</p>
	          
	        </div>
	        <div class="modal-footer">
	          <div id='bookId'></div>
	        </div>
	    </div>
      
    </div>
</div>
<script type="text/javascript">
$(document).on("click", ".infoId", function () {
     var myBookId = $(this).data('id');
     document.getElementById("bookId").innerHTML ="<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button><a href='/delete/"+myBookId+"' class='btn btn-danger'>Delete</a>";
     
});
</script>
@endsection