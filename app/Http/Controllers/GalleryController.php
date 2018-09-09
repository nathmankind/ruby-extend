<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\School;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('admin.gallery.view_image',compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::all();
        return view('admin.gallery.add_image',compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'school_id' => 'required',
            'picture' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('picture')){
            foreach($request->picture as $pics) {
                $filename = $pics->getClientOriginalName();
                $location = 'img/gallery/';
                $pics->move($location,$filename);
                $gallery = new Gallery();
                $gallery->title = $request->title;
                $gallery->school_id = $request->school_id;
                $gallery->description = $request->description;
                $gallery->image = $filename;
                $gallery->save();
            }

        }

        return redirect()->route('image.index')->withSuccess('Your Image Upload  has been successfully added!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
    }
}
