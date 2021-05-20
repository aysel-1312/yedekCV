<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        $posts=Post::latest()->with(['user','likes'])->paginate(2);
        return view('posts.post',compact('posts'));
    }
   /* public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post
        ]);
    }*/
    public function pos(Request $request)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);
        $request->user()->posts()->create($request->only('body'));

        return back();
    }
    public function dest(Post $post)
    {
        $this->authorize('delete',$post);
        $post->delete();
        return back();
    }

    /*public function index(){
        $posts=Post::latest()->with(['user','likes'])->paginate(20);
        return view('posts.index',[
            'posts'=>$posts
        ]);
    }
    public function show(Post $post)
    {
        return view('posts.show',[
            'post'=>$post
        ]) ;
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);
        $request->user()->posts()->create($request->only('body'));

        return back();
    }
    public function destroy(Post $post)
    {
        $this->authorize('delete',$post);
        $post->delete();
        return back();
    }*/
}
