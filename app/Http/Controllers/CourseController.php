<?php

namespace App\Http\Controllers;

use App\Learn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{

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
        $learns =   Learn::orderBy('created_at', 'desc')->paginate(9);

        return view('learn.index')->with('learns' ,$learns);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('learn.createcourse');
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
            'smalldes'=>'required',
            'link'=>'required',
            'title'=>'required',
            'course_image'=>'image|nullable'
        ]);

        if($request->hasFile('course_image')){
            $filenameWithExtention = $request->file('course_image')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('course_image')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('course_image')->storeAs('public/course_image',$fileNameStore);
        } else {
            $fileNameStore = 'noImage1.jpg';
        }

        $learn = new Learn;
        $learn->Subject   = $request->input('Subject');
        $learn->firstname = $request->input('firstname');
        $learn->lastname  = $request->input('lastname');
        $learn->body      = $request->input('body');
        $learn->smalldes      = $request->input('smalldes');
        $learn->link      = $request->input('link');
        $learn->title = $request->input('title');
        $learn->course_image      = $fileNameStore;
        $learn->save();

        return redirect('/learn')->with('success', 'Done Successfully');
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
        $learn = Learn::find($id);
        return view('learn.index')->with('learn' ,$learn);
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
        $learn = Learn::find($id);

        return view('learn.edit')->with('learn' ,$learn);

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
            'link'=>'required',
            'title'=>'required',
            'course_image'=>'image|nullable'
        ]);

        if($request->hasFile('course_image')){
            $filenameWithExtention = $request->file('course_image')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension = $request->file('course_image')->getClientOriginalExtension();
            $fileNameStore = $fileName .'_'.time().'.'.$extension;
            $path = $request->file('course_image')->storeAs('public/course_image',$fileNameStore);
        }

        $learn = Learn::find($id);
        $learn->Subject   = $request->input('Subject');
        $learn->firstname = $request->input('firstname');
        $learn->lastname  = $request->input('lastname');
        $learn->body      = $request->input('body');
        $learn->smalldes      = $request->input('smalldes');
        $learn->link      = $request->input('link');
        $learn->title = $request->input('title');
        if ($request->hasFile('course_image')) {
            $learn->course_image      = $fileNameStore;

        }
        $learn->save();

        return redirect('/learn')->with('success', 'Done Successfully');
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
        $learn = Learn::find($id);

        if ($learn->course_image != 'noImage1.jpg') {
            Storage::delete('public/post_image/'.$learn->course_image);
        }

        $learn->delete();

        return redirect('/learn')->with('success', 'Done Successfully');
    }
}
