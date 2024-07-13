<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category as categoryModel;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    // === ADMIN BLOG START ===
    public function manageBlog(): View
    {
        return view('roles.admin.blog.manageBlogPageAdmin');
    }

    public function writeBlog(): View
    {

        $categories = categoryModel::All();
        return view('roles.admin.blog.writeBlogPageAdmin',['categories' => $categories]);
    }

    public function store(Request $request)
    {

        $request['slug'] = Str::of($request['title'])->slug('-');
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'writerId' => 'required',
            'slug' => 'required|unique:blogs',
            'kategoriId' => 'required|exists:categories,id',
            'image' => 'required',
            'body' => 'required',
        ],[
            'kategoriId.required' => 'The category field is empty',
            'kategoriId.exist:categories,id' => 'The category field is invalid',
        ]);
        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }
        Blog::create($validatedData);

        return redirect('/manage-blog')->with('success', 'Blog has been posted');
    }

    public function show(Blog $blog)
    {
        return view('roles.admin.blog.viewBlogPageDetailAdmin',["blog" => $blog]);
    }

    public function edit(Blog $blog): View{
        $categories = categoryModel::All();
        return view('roles.admin.blog.editBlogPageAdmin',["blog" => $blog, "categories" => $categories]);
    }

    public function update(Request $request, Blog $blog)
    {
        // dd($request);

        $request['slug'] = Str::of($request['title'])->slug('-');
        // dd( $request['slug']);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'writerId' => 'required',
            'slug' => 'required|unique:blogs',
            'kategoriId' => 'required|exists:categories,id',
            'image' => 'required|image|file|max:1024',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }
        Blog::where('slug',$blog->slug)
        ->update($validatedData);
        return redirect('/manage-blog')->with('success', 'Blog has been updated');
    }

    public function view(): View
    {
        $blogs = Blog::paginate(10); // Mengambil 10 data per halaman
        return view('roles.admin.blog.viewBlogPageAdmin',["blogs"=> $blogs]);
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image != 'default.png' && $blog->image) {
            Storage::delete($blog->image);
        }
        Blog::destroy($blog->id);
        return redirect('/view-blog')->with('success', 'Blog has been deleted');
    }
    
    public function search(Request $request){
        $search = $request->input('search');
        $blogs = Blog::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->paginate();
    
        return view('roles.admin.blog.viewBlogPageAdmin', ["blogs" => $blogs]);
    }

    // === ADMIN BLOG END ===
    
    
    // === USER BLOG START ===

    public function viewBlogUser(): View
    {
        return view("roles.user.blog.blog",["blogs" => Blog::all()]);
    }

    public function blogDetailUser(): View
    {
        return view("roles.user.blog.blogDetail",["blogs" => Blog::all()]);
    }

    // === USER BLOG END ===

    
}
