@extends ('layouts.master')

@section ('title')
	Create new post
@endsection

@section ('content')
<div class="col-sm-8 blog-main">
	<div class="blog-post"> 

	<h2>Create new post</h2>


	<form method="POST" action="/posts">
		{{ csrf_field() }}

		<div class="form-group">
			<label for= "title">ovo je naslov</label>

			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label for="body"> Ovo je body</label>

			<textarea class="form-control" id="body" name="body"></textarea>

		</div>

		<div class="form-group">
			<label for="published">Objavi</label>
			<input type="checkbox" class="form-control" name="published" id="published" value="1">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-default">Submit</button>

		</div>
	</form>
</div>
</div>
@endsection
