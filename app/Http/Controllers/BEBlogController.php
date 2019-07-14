<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BEBlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $blogs = Blog::orderby('created_at','desc')->paginate(10);
        return view('admin.blog.list', compact('blogs'));
    }

    public function findById($id)
    {
        $blog = Blog::findOrFail($id);
        return $blog;
    }

    public function detail($id)
    {
        $blog = $this->findById($id);
        return view('admin.blog.detail', compact('blog'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.create',compact('categories'));
    }

    public function store(CreateBlogRequest $request)
    {
        $blog = new Blog();
        $blog->name = $request->txtBlogName;
        $blog->category_id = $request->category_id;
        $blog->content = $request->txtcontent;
        $blog->image = $request->fImages;
        if ($request->hasFile('fImages')) {
            $image = $request->file('fImages');
            $path = $image->store('images', 'public');
            $blog->image = $path;
        }
//        php artisan storage:link
        $blog->save();
        return redirect()->route('BEBlog.list');
    }

    public function delete($id){
        $blog = $this->findById($id);
        $image = $blog->image;
//        dd($image);
        //delete image
        if ($image) {
            Storage::delete('/public/'.$image);
        }
        $blog->delete();
        return redirect()->route('BEBlog.list');
    }

    public function edit($id){
        $blog = $this->findById($id);
        $categories = Category::all();
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    public function update(UpdateBlogRequest $request, $id){
        $blog = $this->findById($id);
        $blog->name = $request->txtBlogName;
        $blog->content = $request->txtcontent;
        $blog->category_id = $request->category_id;
        //cap nhat anh
        if ($request->hasFile('fImages')) {
            //xoa anh cu neu co
            $currentImage = $blog->image;
            if ($currentImage){
                Storage::delete('/public/'.$currentImage);
            }
            $image = $request->file('fImages');
            $path = $image->store('images','public');
            $blog->image = $path;
        }
        $blog->save();
        return redirect()->route('BEBlog.list');
    }
}
