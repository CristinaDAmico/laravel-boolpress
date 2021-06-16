@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ $post->title }}</h1>
        <div class="mb-5">
            <a  class="btn btn-warning"
                href="{{ route('admin.posts.edit', $post->id)}}">Edit post</a>
        </div>
        <div>{{ $post->content }}</div>

    </div>
@endsection