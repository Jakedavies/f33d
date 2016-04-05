@extends('layouts.app')
@section('posts')
    @foreach($feed as $post)
        <div class="post animated bounceInLeft" data-timestamp="{{$post->created_at}}">
            <div class="left-side">
                {{$post->message}}
            </div>
            <br>

            <small>Author: {{App\User::find($post->user_id)['name']}}</small>

        </div>
    @endforeach
@endsection

@section('content')
    <div class="container">
        <div class="row" >
          <input type="text" style="width: 75%; margin-left: 12%;" placeholder="Enter a tag" name="tag" id="tag"/>
        </div>
        <div class="row post-container">
            @yield('posts')
        </div>
    </div>
@endsection
