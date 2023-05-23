<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user()->name);
        $posts = Post::where('author', Auth::user()->name);
        $posts = $posts->count();
        $userPosts = Post::where('author', Auth::user()->name);
        $userPosts = $userPosts->get();
        return view('home', compact('posts', 'userPosts'));
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }

    public function update(PostStoreRequest $request, Post $post){
        $data = $request->validated();
        // dd($data);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('home');
    }
}
