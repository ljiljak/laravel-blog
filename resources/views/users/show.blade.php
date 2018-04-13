@extends('layouts.master')

@section('title')
User post
@endsection


@section('content')




<div class="col-sm-8 blog-main">
    <div class="blog-post">
<div class="pull-left">
            <h2>{{ $user->name }}</h2>
            <a href="/posts">Back to posts</a>
        </div>

        <h1 class="blog-post-title">Postovi jednog korisnika</h1>

        <ul>
            @foreach($user->posts as $post)
               <li>
                    <a href="{{route('single-post', ['id' => $post->id])}}" > {{$post->title}} </a>
                    <p>by <i><a href="#">{{ $post->user->name }}</a></i></p>
                    <p>{{ $post->body }}</p>
                </li>
                
            @endforeach
        </ul>
    </div>
</div>

@endsection
