@extends ('layouts.master')

@section ('title')
	Register
@endsection

@section ('content')
<div class="col-sm-8 blog-main">
	<div class="blog-post"> 

	<h2>Login</h2>


	<form method="POST" action="/login">
		{{ csrf_field() }}

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
			<button type="submit" class="btn btn-default">Submit</button>

		</div>
	</form>

	@if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif
</div>
</div>
@endsection
