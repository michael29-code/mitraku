<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BlogUserController extends Controller
{
    public function Blog(): View
    {
        return view("Blog",["blogs" => Blog::all()]);
    }


}
