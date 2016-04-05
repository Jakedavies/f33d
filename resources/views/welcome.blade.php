@extends('layouts.app')



@section('content')
    <div class="container welcome">
        <h1>Welcome to F33d</h1>
        <hr/>
        <div>
            <h3>What is F33D?</h3>
            <p>
                F33D is a movement. F33D aims to make the world a better place through ultra responsive live reloading message feeds.
                By synnergizing bleeding edge HTML5, Javascript ES6, and CSS3 we created a message feed for Web 2.0, from the ground up.
            </p>
        </div>
        <hr/>
        <div>
            <h3>Features</h3>
            <ul>
                <li>Web 2.0</li>
                <li>Webscale</li>
                <li>Robust</li>
                <li>Minimalistic</li>
                <li>Synnergistic</li>
            </ul>
        </div>
        <hr/>
        <div>
            <a href="/feed" class="xl btn btn-primary btn-block">
                Click here to see the F33D
            </a>
        </div>
    </div>
@endsection
