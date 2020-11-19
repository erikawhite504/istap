@extends('staff.layout')
@section('content')

<div class="pull-left">
	<h2>Staff Management</h2>
</div>

<div class="row">

	<div class="col-lg-12 margin-tb">

		<div class="pull-right">
			<a class="btn btn-success" href="{{route('staff.create')}}">Create New Staff</a>
</div>
</div>
</div>

@if($message=Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>

@endif

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
		<th>Password</th>
		<th width="280px">Action</th>
	</tr>
@foreach($staff as $staff)

	<tr>
		<td>{{$staff->id}}</td>
		<td>{{$staff->fname}}</td>
		<td>{{$staff->lname}}</td>
		<td>{{$staff->uname}}</td>
		<td>{{$staff->password}}</td>
		<td>
			<form action="{{route('staff.destroy', $staff->id)}}" method="POST">
				

				<a class="btn btn-primary" href="{{route('staff.edit', $staff->id)}}">Edit</a>

				@csrf
				@method('DELETE')

				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
@endforeach

</table>
