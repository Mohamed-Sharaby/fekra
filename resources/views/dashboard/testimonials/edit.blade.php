@extends('dashboard.layouts.layout')
@section('title',' تعديل رأى ')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

                <div class="breadcrumb">
                    <a href="{{route('admin.main')}}" class="header-title m-t-0 m-b-30"><i class="icon-home2 mr-2"></i>
                        الرئيسية</a> /
                    <a href="{{route('admin.testimonials.index')}}" class="header-title m-t-0 m-b-30"><i
                            class="icon-home2 mr-2"></i>
                        الاراء </a> /
                    <span class="breadcrumb-item active">@yield('title')</span>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            {{--                            @include('dashboard.layouts.status')--}}
                            <h4 class="header-title m-t-0 m-b-30"> تعديل رأى</h4>

                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data"
                                  action="{{route('admin.testimonials.update',$testimonial->id)}}">
                                @csrf
                                {{method_field('put')}}

                                <div class="form-group row">
                                    <label class="col-md-2 control-label">الاسم</label>
                                    <div class="col-md-4">
                                        <input type="text"
                                               class="form-control  {{$errors->has('name') ? ' is-invalid' : null}}"
                                               name="name" value="{{$testimonial->name}}" placeholder="الاسم">
                                        @error('name')
                                        <div class="invalid-feedback" style="color: #ef1010">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label">الصورة</label>
                                    <div class="col-md-4">
                                        <input type="file"
                                               class="form-control  {{$errors->has('image') ? ' is-invalid' : null}}"
                                               name="image">
                                        @error('image')
                                        <div class="invalid-feedback" style="color: #ef1010">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    @if($testimonial->image)

                                        <a data-fancybox="gallery" href="{{getImgPath($testimonial->image)}}">
                                            <img src="{{getImgPath($testimonial->image)}}" width="100" height="100" class="img-thumbnail">
                                        </a>
                                    @else لا يوجد صورة @endif

                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 control-label"> المحتوى</label>
                                    <div class="col-md-10">
                                        <textarea name="content" cols="30" rows="5" placeholder="المحتوى ..."
                                                  class="form-control {{$errors->has('content') ? ' is-invalid' : null}}">{{$testimonial->content}}</textarea>
                                        @error('content')
                                        <div class="invalid-feedback" style="color: #ef1010">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center form-group row">
                                    <button type="submit"
                                            class="btn btn-success btn-block waves-effect waves-light m-l-10 btn-md">
                                        تعديل
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div><!-- end col -->
                </div>
            </div>
        </div><!-- end col -->
    </div>

@endsection
