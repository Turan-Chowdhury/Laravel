<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller
{
    public function home(){

        return view('home');
    }

    public function contact(){

        return view('contact');
    }

    public function contactHandler(Request $req){

        return "You passed ". $req->input('name');
    }

    public function posts($id){

        return "this is posts     ". $id;
    }

    public function optional($id=null){

        return "this is optional     ". $id;
    }

    public function formHandler(Request $req){

        // $req->validate([
        //     'name' => 'required|min:5',
        //     'email' => 'required|email'
        // ]);

        // return $req->input();

        
        return redirect()->back()->with('success', 'Successfully inserted!');
    }

    public function modelHandler(){
        
        return Post::all();
    }

}
