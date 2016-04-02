@extends('layouts.app')

@section('posts')
    @foreach($feed as $post)
        <div class="post" data-timestamp="{{$post->created_at}}">
            {{$post->message}}
        </div>
    @endforeach
@endsection

@section('content')
    <div class="container">
        <div class="row post-container">
            @yield('posts')
        </div>
    </div>
@endsection
