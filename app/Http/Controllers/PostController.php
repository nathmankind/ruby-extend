<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
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
        $posts = Post::all();
        return view('admin.post.view_post',compact('categories','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.post.add_post',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, array(
            'title' => 'required|max:255',
            'picture' => 'required|image',
            'category_id' => 'required',
            'body'  => 'required',
//            'tag'  => 'required'
        ));
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug =  str_slug($post->title);
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;

        if($request->hasFile('picture')){
            $image = $request->picture;
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/post/");
            $image->move($location,$filename);
//            Image::make($image)->resize(800, 400)->save($location);
            $post->image = $filename;
        }
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.edit_post');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.post.edit_post',compact('post','categories'));
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
        $this->validate($request, array(
            'title' => 'required|max:255',
            'picture' => 'required|image',
            'category_id' => 'required',
            'body'  => 'required',
        ));
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug =  str_slug($post->title);
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        if($request->hasFile('picture')){
            $image = $request->picture;
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/post/");
            $image->move($location,$filename);
            $oldFilename = $post->image;
            $post->image = $filename;

            Storage::delete($oldFilename);
        }
        $post->update();
        return redirect()->route('post.index');
    }

    public function deleteItem(Request $request)
    {
        $post = Post::find($request->id);
        Storage::delete($post->image);
        $post->delete();
        return response()->json();
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
