<p>Zdravo, {{ $post->user->name }}</p>

<p>Imate novi komentar na postu
	<a href="{{ url('posts/' . $post->id)}}"></a>
	{{ $post->title }}
</p>