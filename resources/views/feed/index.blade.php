@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($feed as $post)
                <div class="message">
                    {{$post->message}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
