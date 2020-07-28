<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Posts;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin(){
        return view('admin');
    }


    public function index(){

        $posts = DB::table('post')->get();
        return view('admin.adminIndex', compact('posts'));
    }

    public function create(){

        return view('admin.adminCreate');
    }

    public function store(){

        Posts::create(request(['title', 'body', 'conclusion']));
        return redirect('/admin');
    }

    public function show($id){

        $posts = Posts::findOrFail($id);
        return view('admin.adminShow', compact('posts'));
    }

    public function edit($id){
        $posts = Posts::findOrFail($id);
        return view('admin.adminEdit', compact('posts'));


    }

    public function update($id){

        $posts = Posts::findOrFail($id);
        $posts->title = request('title');
        $posts->body = request('body');
        $posts->conclusion = request('conclusion');
        $posts->save();

        return redirect('/admin');
    }

    public function destroy($id){


        Posts::findOrFail($id)->delete();
        return redirect('/admin');

    }
}
