<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;


class PostsController extends Controller
{

    /* This to prevent any one to create/delete/edit post
    */

    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'show']]);

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $posts =   Post::orderBy('created_at', 'desc')->get();

        $posts =   Post::orderBy('created_at', 'desc')->paginate(9);

        return view('posts.index')->with('posts' ,$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.createnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'Subject'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'body'=>'required',
            'title'=>'required',
            'smalldes'=>'required',
            'post_image'=>'image|nullable'
        ]);


        if($request->hasFile('post_image')){
            $filenameWithExtention = $request->file('post_image')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('post_image')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('post_image')->storeAs('public/post_image',$fileNameStore);
        } else {
            $fileNameStore = 'noImage1.jpg';
        }

        $post = new Post;
        $post->Subject   = $request->input('Subject');
        $post->firstname = $request->input('firstname');
        $post->lastname  = $request->input('lastname');
        $post->body      = $request->input('body');
        $post->title      = $request->input('title');
        $post->smalldes      = $request->input('smalldes');
        $post->post_image      = $fileNameStore;
        $post->save();

        return redirect('/posts')->with('success', 'Done Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.detail')->with('post' ,$post);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('posts.edit')->with('post' ,$post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'Subject'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'body'=>'required',
            'title'=>'required',
            'smalldes'=>'required'

        ]);

        if($request->hasFile('post_image')){
            $filenameWithExtention = $request->file('post_image')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('post_image')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('post_image')->storeAs('public/post_image',$fileNameStore);
        }

        $post = Post::find($id);
        $post->Subject   = $request->input('Subject');
        $post->firstname = $request->input('firstname');
        $post->lastname  = $request->input('lastname');
        $post->title      = $request->input('title');
        $post->body      = $request->input('body');
        $post->smalldes      = $request->input('smalldes');
        if ($request->hasFile('post_image')) {
            $post->post_image      = $fileNameStore;

        }
        $post->save();

        return redirect('/posts')->with('success', 'Done Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


        $post = Post::find($id);

        if ($post->post_image != 'noImage1.jpg') {
            Storage::delete('public/post_image/'.$post->post_image);
        }

        $post->delete();

        return redirect('/posts')->with('success', 'Done Successfully');

    }

   // public function search(Request $request) {
       // $search = $request->$search;
        //$post = Post::where('title', '%'.$search.'%')->get();

        //return view()

    //}
}
