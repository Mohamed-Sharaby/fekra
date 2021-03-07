<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\TestimonialRequest;
use App\Models\Service;
use App\Models\Testimonial;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Testimonials');
    }

    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('dashboard.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('dashboard.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(TestimonialRequest $request)
    {
        $validator = $request->validated();
        Testimonial::create($validator);
        return redirect(route('admin.testimonials.index'))->with('success', 'تم الاضافة بنجاح');
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
    public function edit(Testimonial $testimonial)
    {
        return view('dashboard.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $validator = $request->validated();
        if ($request->image) {
            if ($testimonial->image) {
                deleteImage('uploads', $testimonial->image);
            }
        }

        $testimonial->update($validator);
        return redirect(route('admin.testimonials.index'))->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            deleteImage('uploads', $testimonial->image);
        }

        $testimonial->delete();
        return 'Done';
    }
}
