<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Nolan;
use Request;
use App\Feed;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{

    function __construct()
    {
        $this->middleware('auth', ['only' => 'make', 'create', 'store', 'edit', 'update', 'delete']);
    }

    public function show(){

    }

    //Better naming would be a good thing here
    public function make(){
        $post = new Feed();
        $post->user_id = Auth::user()->id;
        return view('feed.createFeedPost', compact('post'));
    }
    public function index()
    {

        if(Request::input('after')){
            $feed = Feed::where('created_at', '>', Request::input('after'))->orderBy('created_at', 'DESC')->get();
        } else {
            $feed = Feed::orderBy('created_at', 'DESC')->get();
        }
        $view = view('feed.index', ['feed' => $feed]);
        if(Request::ajax()) {
            $sections = $view->renderSections();
            return $sections['posts'];
        }
        return $view;
    }
    public function create(Nolan $request)
    {
        $req = $request->all();
        $post = new Feed($req);
        $post->save();
        return redirect('/feed');

    }
}
