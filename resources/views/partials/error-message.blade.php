@if($errors->has($fieldTitle))
    <div class="alert alert-danger">
        @foreach($errors->get($fieldTitle) as $error)
            <div> {{ $error }} </div>
        @endforeach
    </div>
@endif