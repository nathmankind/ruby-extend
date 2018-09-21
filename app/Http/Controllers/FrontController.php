<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\School;
use Illuminate\Http\Request;
use App\Contact;
use App\Volunteer;

class FrontController extends Controller
{
    public function contact(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();
        return redirect()->back()->with(['success'=> 'Your message was succesfully sent']);

    }

    public function  volunteer(Request $request){
        $this->validate($request,[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'skill' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'reason' => 'required'
        ]);
        $volunteer = new Volunteer();
        $volunteer->firstName = $request->firstName;
        $volunteer->lastName = $request->lastName;
        $volunteer->email = $request->email;
        $volunteer->skill = $request->skill;
        $volunteer->city = $request->city;
        $volunteer->state = $request->state;
        $volunteer->zip = $request->zip;
        $volunteer->reason = $request->reason;
        $volunteer->save();
        return redirect()->back()->with(['success'=> 'Your message was succesfully sent']);
    }

    public function  blog (){
        $posts = Post::paginate(5);
        $categories = Category::all();
        return view('blog',compact('posts','categories'));
    }

    public function single($slug){
         $post = Post::where('slug',$slug)->first();
        $categories = Category::all();
         return view('blog-single',compact('post','categories'));
    }

    public function volunt(){
        return view('volunteer');
    }

    public function gallery(){
        $schools = School::all();
        return view('gallery',compact('schools'));
    }
}
