<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BEPageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $pages = Page::all();
        return view('admin.page.list', compact('pages'));
    }

    public function findById($id)
    {
        $page = Page::findOrFail($id);
        return $page;
    }

    public function detail($id)
    {
        $page = $this->findById($id);
        return view('admin.page.detail', compact('page'));
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(CreatePageRequest $request)
    {
        $page = new Page();
        $page->name = $request->txtPageName;
        $page->content = $request->txtcontent;
        $page->save();
        return redirect()->route('BEPage.list');
    }

    public function delete($id){
        $category = $this->findById($id);
        $category->delete();
        return redirect()->route('BEPage.list');
    }

    public function edit($id){
        $page = $this->findById($id);
        return view('admin.page.edit', compact('page'));
    }

    public function update(UpdatePageRequest $request, $id){
        $category = $this->findById($id);
        $category->name = $request->txtPageName;
        $category->type_is = $request->type_is;
        $category->content = $request->txtcontent;
        $category->save();
        return redirect()->route('BEPage.list');
    }
}
