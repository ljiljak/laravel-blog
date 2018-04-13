@extends('layouts.master')

@section('title')
Post koji sam dobio
@endsection


@section('content')

<div class="col-sm-8 blog-main">
	<div class="blog-post">
		<h1 class="blog-post-title">Postovi</h1>

        <ul>
            @foreach($posts as $post)
               <li>
                    <a href="{{route('single-post', ['id' => $post->id])}}" > {{$post->title}} </a>
                    <p>by <i><a href="{{ route('users', ['user_id' => $post->user_id])}}">{{ $post->user->name }}</a></i></p>
                    <p>{{ $post->body }}</p>
                    <a href=" {{ route('/post/tags', ['tag'=>$tag])}} "> {{ $tag->name }}
                    </a>
                </li>
                
            @endforeach
        </ul>
    </div>
</div>

@endsection
