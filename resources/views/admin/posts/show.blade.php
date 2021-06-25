@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ $post->title }}</h1>

        @if ($post->category)
            <h3>Category: {{ $post->category->name }}</h3>  
        @endif
       
        <div class="mb-5">
            <a  class="btn btn-warning"
                href="{{ route('admin.posts.edit', $post->id)}}">Edit post</a>
        </div>

        <div>{{ $post->content }}</div>

        {{-- POST TAGS --}}
        {{-- @dump($post->tags) --}}
        @if(count($post->tags) > 0)
            <h4>Tags</h4>
            
            @foreach ($post->tags as $tag)
                <span class="badge badge-primary">{{ $tag->name }}</span>  
            @endforeach
        @endif

    </div>
@endsection