<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $categories;
    public function __construct()
    {
        $this->categories = Category::all();
    }

    public function about(){
        $categories = $this->categories;
        $page = Page::where('type_is','About' )->first();
        return view('about', compact('page','categories'));
    }

    public function contact(){
        $categories = $this->categories;
        $page = Page::where('type_is','Contact' )->first();
        return view('contact', compact('page','categories'));
    }

    public function blogPost(){
        $categories = $this->categories;
        $blogs = Blog::orderby('created_at','desc')->paginate(10);
        return view('blogpost', compact('categories','blogs'));
    }

    public function postByCate($id){
        $categories = $this->categories;
        $blogsbycate = Blog::where('category_id',$id)->paginate(10);
        return view('postbycate', compact('categories','blogsbycate'));
    }

    public function searchPost(Request $request){
        $categories = $this->categories;
        $name = $request->txtsearch;
        $blogs = Blog::where('name', 'LIKE' ,'%'.$name.'%')->paginate(10);
        return view ('search',compact('categories', 'blogs'));
    }
}
