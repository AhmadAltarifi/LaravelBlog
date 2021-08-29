<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use Illuminate\Support\Facades\Storage;

class TopicController extends Controller
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
        $topics =   Topic::orderBy('created_at', 'desc')->paginate(9);

        return view('topics.index')->with('topics' ,$topics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('topics.createtopics');

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
            'topic_image'=>'image|nullable'
        ]);


        if($request->hasFile('topic_image')){
            $filenameWithExtention = $request->file('topic_image')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('topic_image')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('topic_image')->storeAs('public/topic_image',$fileNameStore);
        } else {
            $fileNameStore = 'noImage.png';
        }

        $topic = new Topic;
        $topic->Subject   = $request->input('Subject');
        $topic->firstname = $request->input('firstname');
        $topic->lastname  = $request->input('lastname');
        $topic->body      = $request->input('body');
        $topic->title      = $request->input('title');
        $topic->smalldes      = $request->input('smalldes');
        $topic->topic_image      = $fileNameStore;
        $topic->save();

        return redirect('/topics')->with('success', 'Done Successfully');
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
        
        $topic = Topic::find($id);
        return view('topics.detail')->with('topic' ,$topic);
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
        $topic = Topic::find($id);
        return view('topics.edit')->with('topic' ,$topic);

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
            'smalldes'=>'required',
            'title'=>'required'

        ]);

        if($request->hasFile('topic_image')){
            $filenameWithExtention = $request->file('topic_image')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('topic_image')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('topic_image')->storeAs('public/topic_image',$fileNameStore);
        } 

        $topic = Topic::find($id);
        $topic->Subject   = $request->input('Subject');
        $topic->firstname = $request->input('firstname');
        $topic->lastname  = $request->input('lastname');
        $topic->title      = $request->input('title');
        $topic->body      = $request->input('body');
        $topic->smalldes      = $request->input('smalldes');
        if ($request->hasFile('topic_image')) {
            $topic->topic_image      = $fileNameStore;

        }
        $topic->save();

        return redirect('/topics')->with('success', 'Done Successfully');
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
        $topic = Topic::find($id);

        if ($topic->topic_image != 'noImage.png') {
            Storage::delete('public/topic_image/'.$topic->topic_image);
        }

        $topic->delete();

        return redirect('/topics')->with('success', 'Done Successfully');
    }
}
