<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogController extends Controller
{
    public function blog()
    {
        return view('blog.index');
    }
    public function post()
    {
        return view('blog.post');
    }
    public function store(Request $request)
    {
        $blog = new blog();
        $blog->title=$request->title;
        $blog->content=$request->comment;
        $blog->comment=0;
        $blog->save();
    }
}
