<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        $request->validate([
            'title' => 'required|unique:posts',
            'description' => 'required|string',
            'category' => 'required|integer'
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category;
        $post->featured = $request->featured;
        $post->active = $request->active;
        $post->user_id = Auth::user()->getAuthIdentifier();
        $post_image = $request->file('img');
        $file_name = $post->title . time() . '.' . $post_image->extension();
        $post_image->move('post_images', $file_name);
        $post->image = $file_name;
        $post->save();
        return redirect()->route('post.index')->with('success', 'the Post is added successful');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //dd($request->toArray());
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category;
        $post->featured = $request->featured;
        $post->active = $request->active;
        if ($request->file('img') != null) {
            $post_image = $request->file('img');
            $file_name = $post->title . time() . '.' . $post_image->extension();
            $post_image->move('post_images', $file_name);
            $post->image = $file_name;
        }

        $post->save();
        return redirect()->route('post.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
