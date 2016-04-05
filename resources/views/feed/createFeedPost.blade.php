@extends('layouts.app')



@section('content')
<div class="text-center">
    <h1>Oh, hey there, </h1>
    <h3>{{Auth::user()->name}}</h3>
</div>
<br>
<br>
<div class="response-area">
    <p>It's nice to see you here. Shout something into the void of the universe. Everyone is waiting to hear what you have to say. </p>

    {!! Form::model($post, ['url' => '/feed/create']) !!}
    @include('partials.createPost')
    {!! Form::close() !!}
</div>
@stop


