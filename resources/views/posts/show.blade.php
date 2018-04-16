@extends('layouts.master')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
<div class="col-sm-8 blog-main">
    <div class="blog-post">
        
    <h1 class="blog-post-title">{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

        <hr/>
        <h4>Comments</h4>
    <form
        method="POST"
        action="{{ route('comments-post', ['post_id'=> $post->id]) }}">
        {{ csrf_field()  }}
        <div class="form-group">
            <label for="text">Molimo unesite komentar:</label>
            <textarea class="form-control" id="text" name="text"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'text'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
        <ul class="list-unstyled">
            @forelse($post->comments as $comment)
                <li>
                    <p>{{ $comment->text }}</p>
                </li>
                @empty
                    <li>Nema komentara</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection