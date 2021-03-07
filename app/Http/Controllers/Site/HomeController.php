<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $services = Service::all();
        $partners = Partner::all();
        $blogs = Blog::latest()->limit(3)->get();
        return view('site.index',compact('testimonials','services','partners','blogs'));
    }

    public function about()
    {
        return view('site.about');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function services()
    {
        return view('site.services');
    }

    public function blog()
    {
        return view('site.blog');
    }
}
