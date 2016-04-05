@extends('layouts.app')

@section('posts')
    @foreach($feed as $post)
        <div class="post animated bounceInLeft" data-timestamp="{{$post->created_at}}">
            <div class="left-side">
                {{$post->message}}
            </div>
            <br>
            <div class="right-side">
                {{$post->likes}}
            </div>
            <small>Author: {{App\User::find($post->user_id)['name']}}</small>

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
