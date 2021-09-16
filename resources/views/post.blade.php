@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{$post->title}}</h2>

            <p>By. <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> dalam <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>

            @if ($post->image)
                <div style="max-height: 500px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">                    
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">  
                @endif

            <article class="my-3 fs-5">

            {!!$post->body!!}

            </article>
            
            <a href="/blog">Back to Blog</a>
        </div>
    </div>
</div>

    
@endsection