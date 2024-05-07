<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogController extends Controller
{
    public function blog()
    {
        $blogs=blog::all();
        return view('blog.index',['blogs'=>$blogs]);
    }
    public function post()
    {
        return view('blog.post');
    }
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);
        $blog = new blog();
        $blog->title = $request->title;
        $blog->content = $request->comment;
        $blog->comment = 0;
        $blog->photo = 'images/'.$imageName;
        $blog->save();
        return redirect()->route('blog');

    }
}
