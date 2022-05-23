<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $blogs = new Blog;
        $blogs = $blogs->where('status', '=', '1')->orderBy('id', 'desc')->get();


        return view('front.index', compact('blogs'));
    }

    public function blog($id)
    {
        $blog = new Blog;
        $blog = $blog->where('slug', '=', $id)->first();

        return view('front.post', compact('blog'));
    }
}
