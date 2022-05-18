<?php

namespace App\Http\Controllers;

use App\Models\BlogsCategory;
use Illuminate\Http\Request;

class BlogsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = new BlogsCategory;
        $category = $category->get();

        return view('admin.blogs_categories.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
        ]);
        $category = new BlogsCategory;
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->save();
        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogsCategory  $blogsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogsCategory $blogsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogsCategory  $blogsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($blogsCategory)
    {
        $category = new BlogsCategory;
        $category = $category->where('id',$blogsCategory)->first();
        return view('admin.blogs_categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogsCategory  $blogsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$blogsCategory)
    {
        $category = new BlogsCategory;
        $category = $category->where('id',$blogsCategory)->first();
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->update();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogsCategory  $blogsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogsCategory)
    {
        $category=new BlogsCategory;
        $category=$category->where('id',$blogsCategory)->first();
        $category->delete();
        return redirect()->route('category.index');
    }
}
