@extends('dashboard.layouts.layout')
@section('title','فكرة - لوحة التحكم')

@section('content')
    <div class="row">

        @can('Roles')
            <div class="col-lg-3 col-md-6">
                <a href="{{route('admin.roles.index')}}">
                    <div class="card-box bg-info">
                        <h4 class="header-title m-t-0 m-b-30 text-white">الصلاحيات والمناصب</h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <i class="fa fa-balance-scale fa-4x text-white"></i>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0 text-white"> {{\Spatie\Permission\Models\Role::count()}} </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
        @endcan

        @can('Admins')
            <div class="col-lg-3 col-md-6">
                <a href="{{route('admin.admins.index')}}">
                    <div class="card-box bg-success">
                        <h4 class="header-title m-t-0 m-b-30 text-white">الادارة </h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <i class="fa fa-life-ring fa-4x text-white"></i>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0 text-white"> {{\App\Models\Admin::count()}} </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
        @endcan


        @can('Users')
            <div class="col-lg-3 col-md-6">
                <a href="{{route('admin.users.index')}}">
                    <div class="card-box bg-danger">
                        <h4 class="header-title m-t-0 m-b-30 text-white">الأعضاء </h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <i class="fa fa-users fa-4x text-white"></i>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0 text-white"> {{\App\Models\User::count()}} </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
        @endcan

        @can('Services')
            <div class="col-lg-3 col-md-6">
                <a href="{{route('admin.services.index')}}">
                    <div class="card-box bg-warning">
                        <h4 class="header-title m-t-0 m-b-30 text-white">الخدمات </h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <i class="fa fa-database fa-4x text-white"></i>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0 text-white"> {{\App\Models\Service::count()}} </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
        @endcan

        @can('Blogs')
            <div class="col-lg-3 col-md-6">
                <a href="{{route('admin.blogs.index')}}">
                    <div class="card-box bg-primary">
                        <h4 class="header-title m-t-0 m-b-30 text-white">المدونة </h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <i class="zmdi zmdi-blogger zmdi-hc-4x text-white"></i>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0 text-white"> {{\App\Models\Blog::count()}} </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
        @endcan

        @can('Partners')
            <div class="col-lg-3 col-md-6">
                <a href="{{route('admin.partners.index')}}">
                    <div class="card-box bg-pink">
                        <h4 class="header-title m-t-0 m-b-30 text-white">شركاؤنا </h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <i class="fa fa-recycle fa-4x text-white"></i>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0 text-white"> {{\App\Models\Partner::count()}} </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
        @endcan


        @can('GuestMessages')
            <div class="col-lg-3 col-md-6">
                <a href="{{route('admin.guest-messages.index')}}">
                    <div class="card-box bg-purple">
                        <h4 class="header-title m-t-0 m-b-30 text-white">رسائل الزوار </h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <i class="zmdi zmdi-email zmdi-hc-4x  text-white"></i>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0 text-white"> {{\App\Models\GuestMessage::count()}} </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
        @endcan

        @can('Settings')
            <div class="col-lg-3 col-md-6">
                <a href="{{route('admin.settings.index')}}">
                    <div class="card-box bg-inverse">
                        <h4 class="header-title m-t-0 m-b-30 text-white">الاعدادات </h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <i class="zmdi zmdi-settings zmdi-hc-4x  text-white"></i>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0 text-white"> {{\App\Models\Setting::count()}} </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
        @endcan

        @can('Testimonials')
            <div class="col-lg-3 col-md-6">
                <a href="{{route('admin.testimonials.index')}}">
                    <div class="card-box bg-success">
                        <h4 class="header-title m-t-0 m-b-30 text-white">الاراء </h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <i class="fa fa-comment fa-4x  text-white"></i>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0 text-white"> {{\App\Models\Testimonial::count()}} </h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
        @endcan


    </div>
    <!-- end row -->


@endsection
