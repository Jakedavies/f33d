@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row post-container">
            @foreach($feed as $post)
                <div class="post" data-timestamp="{{$post->created_at}}">
                    {{$post->message}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
