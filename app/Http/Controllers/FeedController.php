<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FeedController extends Controller
{
<<<<<<< HEAD

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
    public function create(){

=======
    //

    public function index()
    {

        return view('index');
>>>>>>> 1ad061090c0cfbde276a90190a78c5876fa7684e
    }
}
