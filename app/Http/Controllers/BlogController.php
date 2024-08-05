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

        $message = "\"" . $request->title . "\" has been posted successfully";

        return redirect('/view-blog')->with('success', $message);
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

        // dd( $request['slug']);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'writerId' => 'required',
            // 'slug' => 'required|unique:blogs',
            'kategoriId' => 'required|exists:categories,id',
            'image' => 'required|image|file',
            'body' => 'required',
        ]);
        
        $request['slug'] = Str::of($request['title'])->slug('-');

        $validatedData['slug'] = $request['slug'];

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }
        Blog::where('slug',$blog->slug)
        ->update($validatedData);

        $message = "\"" . $blog->title . "\" has been updadated successfully";

        if($request->title !== $blog->title){
            $message = $message. " to ".$request->title;
        }
        return redirect('/view-blog')->with('success', $message);
    }

    public function view(): View
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(12); // Mengambil 10 data per halaman
        return view('roles.admin.blog.viewBlogPageAdmin',["blogs"=> $blogs]);
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image != 'default.png' && $blog->image) {
            Storage::delete($blog->image);
        }
        Blog::destroy($blog->id);
        $message = "\"" . $blog->title . "\" has been deleted sucessfully";
        return redirect('/view-blog')->with('success', $message);
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
        $latestBlog = Blog::orderBy('created_at', 'desc')->first();

        $blogs = Blog::where('id', '!=', $latestBlog->id)
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('roles.user.blog.blog', [
            'latestBlog' => $latestBlog,
            'blogs' => $blogs
        ]);
    }

    public function blogDetailUser($id): View
    {
        $blog = Blog::find($id);

        return view("roles.user.blog.blogDetail",["blog" => $blog]);
    }

    // === USER BLOG END ===

    
}
