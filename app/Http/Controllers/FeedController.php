<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Feed;

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
        return view('feed.createFeedPost');
    }
    public function delete(){

    }
    public function create()
    {

        //
    }
    public function index()
    {
        $feed = Feed::all();
        return view('feed.index', ['feed' => $feed]);
    }
}
