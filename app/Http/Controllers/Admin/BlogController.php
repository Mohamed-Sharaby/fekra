<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Blogs');
    }

    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('dashboard.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('dashboard.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(BlogRequest $request)
    {
        $validator = $request->validated();
        Blog::create($validator);
        return redirect(route('admin.blogs.index'))->with('success', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $validator = $request->validated();
        if ($request->image) {
            if ($blog->image) {
                deleteImage('uploads', $blog->image);
            }
        }

        $blog->update($validator);
        return redirect(route('admin.blogs.index'))->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            deleteImage('uploads', $blog->image);
        }

        $blog->delete();
        return 'Done';
    }
}
