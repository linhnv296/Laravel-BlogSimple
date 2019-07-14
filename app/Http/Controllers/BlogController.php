<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list()
    {
        $blogs = Blog::orderby('created_at','desc')->paginate(10);
        return view('welcome', compact('blogs'));
    }

    public function findById($id)
    {
        $blog = Blog::findOrFail($id);
        return $blog;
    }
    public function detail($id){
        $categories = Category::all();
        $blog = $this->findById($id);
        $now = strtotime($this->now());
        $created = strtotime($blog->created_at);
        $public = FLOOR(($now - $created)/86400);
        return view('detail', compact('blog','public', 'categories'));
    }

    public function now(){
        $now = Carbon::now();
        return $now;
    }
}
