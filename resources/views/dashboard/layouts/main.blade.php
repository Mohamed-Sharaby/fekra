@extends('dashboard.layouts.layout')
@section('title','فكرة - لوحة التحكم')

@section('content')
    <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="card-box">
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <h4 class="header-title m-t-0 m-b-30">Total Revenue</h4>

                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                               data-bgColor="#F9B9B9" value="58"
                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                               data-thickness=".15"/>
                    </div>

                    <div class="widget-detail-1">
                        <h2 class="p-t-10 m-b-0"> 256 </h2>
                        <p class="text-muted">Revenue today</p>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box">
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <h4 class="header-title m-t-0 m-b-30">Sales Analytics</h4>

                <div class="widget-box-2">
                    <div class="widget-detail-2">
                        <span class="badge badge-success pull-left m-t-20">32% <i
                                class="zmdi zmdi-trending-up"></i> </span>
                        <h2 class="m-b-0"> 8451 </h2>
                        <p class="text-muted m-b-25">Revenue today</p>
                    </div>
                    <div class="progress progress-bar-success-alt progress-sm m-b-0">
                        <div class="progress-bar progress-bar-success" role="progressbar"
                             aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                             style="width: 77%;">
                            <span class="sr-only">77% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box">
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <h4 class="header-title m-t-0 m-b-30">Statistics</h4>

                <div class="widget-chart-1">
                    <div class="widget-chart-box-1">
                        <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                               data-bgColor="#FFE6BA" value="80"
                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                               data-thickness=".15"/>
                    </div>
                    <div class="widget-detail-1">
                        <h2 class="p-t-10 m-b-0"> 4569 </h2>
                        <p class="text-muted">Revenue today</p>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box">
                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <h4 class="header-title m-t-0 m-b-30">Daily Sales</h4>

                <div class="widget-box-2">
                    <div class="widget-detail-2">
                        <span class="badge badge-pink pull-left m-t-20">32% <i
                                class="zmdi zmdi-trending-up"></i> </span>
                        <h2 class="m-b-0"> 158 </h2>
                        <p class="text-muted m-b-25">Revenue today</p>
                    </div>
                    <div class="progress progress-bar-pink-alt progress-sm m-b-0">
                        <div class="progress-bar progress-bar-pink" role="progressbar"
                             aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                             style="width: 77%;">
                            <span class="sr-only">77% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <img src="{{asset('admin')}}/assets/images/users/avatar-3.jpg" class="img-responsive img-circle"
                         alt="user">
                    <div class="wid-u-info">
                        <h4 class="m-t-0 m-b-5 font-600">Chadengle</h4>
                        <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                        <small class="text-warning"><b>Admin</b></small>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <img src="{{asset('admin')}}/assets/images/users/avatar-2.jpg" class="img-responsive img-circle"
                         alt="user">
                    <div class="wid-u-info">
                        <h4 class="m-t-0 m-b-5 font-600"> Michael Zenaty</h4>
                        <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                        <small class="text-custom"><b>Support Lead</b></small>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <img src="{{asset('admin')}}/assets/images/users/avatar-1.jpg" class="img-responsive img-circle"
                         alt="user">
                    <div class="wid-u-info">
                        <h4 class="m-t-0 m-b-5 font-600">Stillnotdavid</h4>
                        <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                        <small class="text-success"><b>Designer</b></small>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <img src="{{asset('admin')}}/assets/images/users/avatar-10.jpg" class="img-responsive img-circle"
                         alt="user">
                    <div class="wid-u-info">
                        <h4 class="m-t-0 m-b-5 font-600">Tomaslau</h4>
                        <p class="text-muted m-b-5 font-13">coderthemes@gmail.com</p>
                        <small class="text-info"><b>Developer</b></small>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->

@endsection