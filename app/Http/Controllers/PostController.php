<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index(){
        $posts = DB::table('post')->get();
        return view('welcome', compact('posts'));
    }

    public function contact(){
        return view('contact');
    }
}
