<div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <div>
        @if ($message = session('message'))
        {{ $message }}
        @endif
        </div>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>

        @if (Auth::check())
      	{{ auth()->user()->name }}
      	<a href="/logout">Logout</a>
      	@else
      	<a href="/login">Login</a>
      	<a href="/register">Register</a>
      	@endif
      </div>


    </div>