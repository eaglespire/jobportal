<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');   //create.blade.php
    }
    public function store(Request $request)
    {
       //dd($request->all());
       $request->validate([
        'title'=>['required','max:50'],
        'body'=>['required'],
        'author'=>['required']
       ]);
       $request->all();
//       $request->validate([
//          'title'=>'required|max:250|filled',
//           'body'=>'required|'
//       ]);

        //Post::create($request->all());
       #Post::create($request->all());
        Post::create([
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
            'author'=>$request->input('body')
        ]) ;
//        Post::create([
//            'title'=>request('title')
//        ])
         //session() global helper
        //return back()->with('success','Post Created');
        session()->flash('success','Post Created!!!');
        return back();
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit',[
            'post'=>$post
        ]);
    }

    public function index()
    {
        //$posts = Post::all();
        $posts = Post::get();
       // dd($posts);
        //dd($posts);
        return view('posts.all-posts', [
            'posts'=>$posts
        ]);
//        return view('posts.all-posts',[
//           'posts'=>$posts
//        ]) ;
    }
}
