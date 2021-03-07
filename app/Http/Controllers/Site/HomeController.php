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
        $partners = Partner::all();
        return view('site.about',compact('partners'));
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function services()
    {
        $services = Service::all();
        return view('site.services',compact('services'));
    }

    public function blog()
    {
        $blogs = Blog::latest()->get();
        return view('site.blog',compact('blogs'));
    }

    public function singleBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('site.single-blog',compact('blog'));
    }
}
