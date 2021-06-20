<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all()->count();

        $posts = Post::all()->count();

        $categories = Category::all()->count();

        $comments = Comment::all()->count();

        return view('admin.dashboard')->with(compact('users','posts','categories','comments'));
    }
}
