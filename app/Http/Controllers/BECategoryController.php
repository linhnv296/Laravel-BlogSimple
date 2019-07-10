<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BECategoryController extends Controller
{
    public function list()
    {
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }

    public function findById($id)
    {
        $category = Category::findOrFail($id);
        return $category;
    }

    public function detail($id)
    {
        $category = $this->findById($id);
        return view('admin.category.detail', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->txtCateName;
        $category->desc = $request->desc;
        $category->image = $request->fImages;
        //upload file
        if ($request->hasFile('fImages')) {
            $image = $request->file('fImages');
            $path = $image->store('images', 'public');
            $category->image = $path;
        }
//        php artisan storage:link
        $category->save();
        return redirect()->route('BECategory.list');
    }

    public function delete($id){
        $category = $this->findById($id);
        $image = $category->image;
//        dd($image);
        //delete image
        if ($image) {
            Storage::delete('/public/'.$image);
        }
        $category->delete();
        return redirect()->route('BECategory.list');
    }

    public function edit($id){
        $category = $this->findById($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = $this->findById($id);
        $category->name = $request->txtCateName;
        $category->desc = $request->desc;
        //cap nhat anh
        if ($request->hasFile('fImages')) {
            //xoa anh cu neu co
            $currentImage = $category->image;
            if ($currentImage){
                Storage::delete('/public/'.$currentImage);
            }
            $image = $request->file('fImages');
            $path = $image->store('images','public');
            $category->image = $path;
        }
        $category->save();
        return redirect()->route('BECategory.list');
    }
}
