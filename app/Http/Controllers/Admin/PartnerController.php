<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Partner;
use App\Models\Service;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Partners');
    }

    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $partners = Partner::latest()->get();
        return view('dashboard.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('dashboard.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,svg,gif|max:2048',
        ]);
        Partner::create($validator);
        return redirect(route('admin.partners.index'))->with('success', 'تم الاضافة بنجاح');
    }


    public function destroy(Partner $partner)
    {
        if ($partner->image) {
            deleteImage('uploads', $partner->image);
        }

        $partner->delete();
        return 'Done';
    }
}
