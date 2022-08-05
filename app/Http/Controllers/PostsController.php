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
            'author'=>$request->input('author')
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
        //with method
        return view('posts.edit',compact('post'));
//        return view('posts.edit',[
//            'post'=>$post
//        ]);
    }

    public function index()
    {
        //$posts = Post::all();
        $posts = Post::get();
       // dd($posts);
        //dd($posts);
//        return view('posts.all-posts', [
//            'posts'=>$posts
//        ]);
        return view('posts.all-posts', compact('posts'));
//        return view('posts.all-posts',[
//           'posts'=>$posts
//        ]) ;
    }
    public function update(Request $request, $id)
    {
         //validate the data
        //fetch the data
        //update the data
         /*
          * This code validates the user's form data
          */
        $request->validate([
            'title'=>['required','max:50'],
            'body'=>['required'],
            'author'=>['required']
        ]);
        /*
         * After validation, fetch the exact model that you want to update
         * Do this by creating a variable to store that model and then use
         * eloquent's find method to locate that model(a single row in the db table) by it's id
         */
        $post = Post::find($id);
        /*
         * Then call the update method of the Model on the created variable
         * We access  a method in php by using the thin arrow notation
         */
       // $post->update($request->all());
        $post->update([
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),
            'author'=>$request->input('author')
        ]);
        /*
         * Inside the update method, pass an array of the values you want to update
         */
            session()->flash('success','Updated Successfully!');
            return redirect(route('post.all'));

            //Other redirect methods available include
        //return redirect()->to('/posts');
        //return redirect()->route('post.all');
    }
    public function destroy($id)
    {
       //get the post to delete
        $post = Post::find($id);
        //delete the post
        $post->delete();
        session()->flash('success','Deleted Successfully');
        return back();
    }
}
