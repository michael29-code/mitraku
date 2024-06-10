<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function blogDetail(): View
    {
        return view("blogDetail",["blogs" => Blog::all()]);
    }
}
