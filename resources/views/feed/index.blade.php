@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($post in $posts)
                {{$post->message}}
            @endforeach
        </div>
    </div>
@endsection
