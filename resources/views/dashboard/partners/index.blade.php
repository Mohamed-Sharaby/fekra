@extends('dashboard.layouts.layout')
@section('title','شركاؤنا ')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

                <div class="breadcrumb">
                    <a href="{{route('admin.main')}}" class="header-title m-t-0 m-b-30"><i class="icon-home2 mr-2"></i>
                        الرئيسية</a> /
                    <span class="breadcrumb-item active">@yield('title')</span>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            @include('dashboard.layouts.status')

                            <a href="{{route('admin.partners.create')}}"
                               class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-5">اضافة شريك
                                جديد </a>
                            <br>
                            <br>

                            <table id="datatable-keytable" class="table table-striped table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th>الصورة</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($partners as $index => $partner)
                                    <tr>
                                        <td>{{$index +1}}</td>
                                        <td>{{$partner->name}}</td>
                                        <td>
                                            @if($partner->image)
                                                <a data-fancybox="gallery" href="{{getImgPath($partner->image)}}">
                                                    <img src="{{getImgPath($partner->image)}}" width="70" height="70"
                                                         class="img-thumbnail" alt="service_img">
                                                </a>
                                            @else {{__('No Image')}} @endif
                                        </td>

                                        <td class="text-center">
                                            <button data-url="{{route('admin.partners.destroy',$partner->id)}}"
                                                    class="btn-icon waves-effect btn btn-danger rounded-circle btn-sm ml-2 delete"
                                                    title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div><!-- end col -->
                </div>

            </div>
        </div><!-- end col -->
    </div>

@endsection
