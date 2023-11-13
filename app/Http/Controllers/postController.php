<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function index() : View {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }
}
