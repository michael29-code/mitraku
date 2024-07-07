<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BlogUserController extends Controller
{
    public function blog(): View
    {
        return view("roles.user.blog.blog",["blogs" => Blog::all()]);
    }

}
