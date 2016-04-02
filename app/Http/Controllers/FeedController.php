<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Feed;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{

    function __construct()
    {
        $this->middleware('auth', ['only' => 'create', 'store', 'edit', 'update', 'delete']);
    }

    public function show(){

    }
    public function edit(){

    }
    //Better naming would be a good thing here
    public function make(){
        $post = new Feed();
        $post->user_id = Auth::user()->id;
        return view('feed.createFeedPost', compact('post'));
    }
    public function delete(){

    }
    public function create()
    {

    }
    public function index()
    {

        return view('index');
    }
}
