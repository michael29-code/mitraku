<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category as categoryModel;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function manageBlog(): View
    {
        return view('manageBlogPageAdmin');
    }
    public function writeBlog(): View
    {

        $categories = categoryModel::All();

        return view('writeBlogPageAdmin',['categories' => $categories]);
    }
    public function store(Request $request)
    {
        // dd($request);

        $request['slug'] = Str::of($request['title'])->slug('-');
        // dd( $request['slug']);
        $validatedData = $request->validate([
            'title' => '',
            'writerId' => '',
            'slug' => '',
            'kategoriId' => '',
            'image' => 'image|file|max:1024',
            'body' => '',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }
        Blog::create($validatedData);

        return redirect('/manage-blog');
    }

    public function show(Blog $blog)
    {
        return view('viewBlogPageDetailAdmin',["blog" => $blog]);
    }

    public function edit(Blog $blog): View{
        $categories = categoryModel::All();
        return view('editBlogPageAdmin',["blog" => $blog, "categories" => $categories]);
    }

    public function update(Request $request, Blog $blog)
    {
        // dd($request);

        $request['slug'] = Str::of($request['title'])->slug('-');
        // dd( $request['slug']);
        $validatedData = $request->validate([
            'title' => '',
            'writerId' => '',
            'slug' => '',
            'kategoriId' => '',
            'image' => 'image|file|max:1024',
            'body' => '',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }
        Blog::where('slug',$blog->slug)
        ->update($validatedData);
        return redirect('/manage-blog');
    }

    public function view(): View
    {
        return view('viewBlogPageAdmin',["blogs" => Blog::all()]);
        // $blogs = Blog::with('writer')->get();
        // return view('viewBlogPageAdmin', compact('blogs'));
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }
        Blog::destroy($blog->id);
        return redirect('/view-blog');
    }
}
