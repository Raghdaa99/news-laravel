<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontSiteController extends Controller
{
    public function showHome()
    {
        $post_one = Post::where('active', 'Yes')->first();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->where('active', 'Yes')->offset(7)->take(9)->get();
        $recent_posts = Post::orderBy('created_at', 'desc')->where('active', 'Yes')->take(6)->get();
        $week_posts = Post::orderBy('created_at', 'desc')->where('active', 'Yes')->offset(11)->take(6)->get();
        return view('frontsite.index')->with(compact('post_one','categories','posts','recent_posts','week_posts'));
            //compact('post_one'), compact('categories'),compact('posts'));

    }

    public function showDetails($id)
    {
        $post = Post::find($id);
        return view('frontsite.details',compact('post'));
    }
    public function search(Request $request)
    {
        $word=$request->search;
        $posts = Post::where('title', 'like', '%' . $word . '%')
            ->orWhere('description', 'like', '%' . $word . '%')->get();
        //$posts->description=substr($posts->description, 0, 50).'...';
        return view('frontsite.search_news',compact('posts','word'));
    }
    public function showCategory($id)
    {
        $category=Category::find($id);
        $categories = Category::all();
        return view('frontsite.categori')->with(compact('category','categories'));
    }

    public function showAbout()
    {
        return view('frontsite.about');
    }

    public function showContact()
    {
        return view('frontsite.contact');
    }

    public function showLogin()
    {
        return view('frontsite.login_user');
    }

    public function showRegister()
    {
        return view('frontsite.register_user');
    }
}
