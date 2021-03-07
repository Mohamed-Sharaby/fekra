@extends('site.layouts.layout')
@section('title','خدماتنا ')

@section('content')
    <!-- section begin -->
    <section id="subheader" class="top-header-sec has-a-bg">
        <div class="center-y relative text-center" data-scroll-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action='#' class="row" id='form_subscribe' method="post" name="myForm">
                            <div class="col-md-12 text-center">
                                <h1>خدماتنا</h1>
                                <p>تعرف على خدماتنا</p>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section class="no-top">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 mb30">
                        <div class="f-box f-icon-left f-icon-rounded">
                            <img class="bg-color" src="{{getImgPath($service->image)}}" alt="">
                            <div class="fb-text">
                                <h4>{{$service->text}}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- content close -->
@endsection
