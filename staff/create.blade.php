@extends('staff.layout')
@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Add New Staff</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{route('staff.index')}}">Back</a>
		</div>
	</div>
</div>

@if($errors->any())
<div class="alert alert-danger">
	<strong>Oops!</strong>There's a problem.<br><br>

	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>

@endif
<form action="{{route('staff.store')}}" method="POST">
	@csrf

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>First Name: </strong>
				<input type="text" name="fname" class="form-control" placeholder="first name">
			</div>
		</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Last Name: </strong>
			<input type="text" name="lname" class="form-control" placeholder="last name">
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Username: </strong>
			<input type="text" name="uname" class="form-control" placeholder="username">
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Password: </strong>
			<input type="text" name="password" class="form-control" placeholder="password">
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
</form>
@endsection