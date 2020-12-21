<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.blog.blog');
    }

    public function singleBlog()
    {
        return view('pages.blog.single-blog');
    }
}
