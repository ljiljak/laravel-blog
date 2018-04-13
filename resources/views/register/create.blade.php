
@section ('title')
	Register
@endsection

@section ('content')
<div class="col-sm-8 blog-main">
	<div class="blog-post"> 

	<h2>Register</h2>


	<form method="POST" action="/register">
		{{ csrf_field() }}

		<div class="form-group">
			<label for= "name">Name</label>
			<input id="name" type="text" name="name" class="form-control">
			@include('partials.error-message', ['fieldTitle' => 'name'])

		</div>

		<div class="form-group">
			<label for= "email">Email</label>
			<input id="email" type="text" name="email" class="form-control">
			@include('partials.error-message', ['fieldTitle' => 'email'])

		</div>

		<div class="form-group">
			<label for= "password">Password</label>
			<input id="password" type="text" name="password" class="form-control">
			@include('partials.error-message', ['fieldTitle' => 'password'])

		</div>
		<div class="form-group">
			<label for="age">Age</label>
			<input type="number" name="age" class="form-control" id="age">			

		</div>
		

		<div class="form-group">
			<button type="submit" class="btn btn-default">Submit</button>

		</div>
	</form>
</div>
</div>
@endsection
