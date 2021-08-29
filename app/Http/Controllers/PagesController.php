<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Topic;
use App\Learn;


class PagesController extends Controller
{
    //
    public function index() {
        $posts =   Post::orderBy('created_at', 'desc')->paginate(9);
        $topics =   Topic::orderBy('created_at', 'desc')->paginate(9);
        $learns =   Learn::orderBy('created_at', 'desc')->paginate(9);

        return view('pages.index')->with('posts' ,$posts)->with('topics' ,$topics)->with('learns' ,$learns);

    }

    public function about() {
        return view('pages.about');
    }

    public function programming() {
        return view('pages.programming');
    }
}
