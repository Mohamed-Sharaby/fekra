<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Services');
    }

    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(ServiceRequest $request)
    {
        $validator = $request->validated();
        Service::create($validator);
        return redirect(route('admin.services.index'))->with('success', 'تم الاضافة بنجاح');
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
    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $validator = $request->validated();
        if ($request->image) {
            if ($service->image) {
                deleteImage('uploads', $service->image);
            }
        }

        $service->update($validator);
        return redirect(route('admin.services.index'))->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return
     */
    public function destroy(Service $service)
    {
        if ($service->image) {
            deleteImage('uploads', $service->image);
        }

        $service->delete();
        return 'Done';
    }
}
