@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2 response">
    {!! Form::model($post, ['url' => '/feed']) !!}
    @include('partials.createPost')
    {!! Form::close() !!}
</div>
@stop


