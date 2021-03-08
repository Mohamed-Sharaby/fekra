<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\GuestMessage;
use App\Models\MailList;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $services = Service::all();
        $partners = Partner::all();
        $blogs = Blog::latest()->limit(3)->get();
        return view('site.index', compact('testimonials', 'services', 'partners', 'blogs'));
    }

    public function about()
    {
        $partners = Partner::all();
        return view('site.about', compact('partners'));
    }

    public function services()
    {
        $services = Service::all();
        return view('site.services', compact('services'));
    }

    public function blog()
    {
        $blogs = Blog::latest()->get();
        return view('site.blog', compact('blogs'));
    }

    public function singleBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('site.single-blog', compact('blog'));
    }


    public function contact()
    {
        $address = Setting::whereName('address')->first();
        $location = Setting::whereName('location')->first();
        $phone = Setting::whereName('phone')->first();
        $mobile = Setting::whereName('mobile')->first();
        $email = Setting::whereName('email')->first();
        return view('site.contact', compact('address', 'location', 'mobile', 'email'));
    }


    public function PostContact(Request $request)
    {
        $vL = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'content' => 'required'
        ]);

        if ($vL->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $vL->errors()->first()
            ]);
        } else {
            GuestMessage::create($request->all());
            return response()->json([
                'status' => true,
            ]);
        }
    }


    public function subscribe(Request $request)
    {
        $vL = Validator::make($request->all(), [
            'email' => 'required|email|unique:mail_lists,email',
        ]);

        if ($vL->fails()) return response()->json([
            'status' => false,
            'errors' => $vL->errors()->first()
        ]);
        MailList::create($request->all());
        return response()->json([
            'status' => true,
        ]);
    }



}
