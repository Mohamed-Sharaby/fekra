@extends('site.layouts.layout')
@section('title','تغيير كلمة المرور ')

@section('content')
    <!-- section begin -->
    <section id="subheader" data-bgimage="url(site/images/background/5.png) bottom">
        <div class="center-y relative text-center" data-scroll-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <form action='#' class="row" id='form_subscribe' method="post" name="myForm">
                            <div class="col-md-12 text-center">
                                <h1>تغيير كلمة المرور</h1>
                                <p>من فضلك ادخل الكود المرسل على جوالك  لتغيير كلمة المرور</p>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section class="no-top" data-bgimage="url(site/images/background/3.png) top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto mb-sm-30">
                    <form name="contactForm" id="contact_form1" action="{{url('/change-password')}}" method="post" class="form-border">
                        @csrf
                        @include('dashboard.layouts.status')

                        <input type="hidden" name="phone" value="{{$phone}}">
                        <div class="field-set">
                            <input type="text" name="code"   class="form-control" placeholder="1234"
                                   required value="{{old('code')}}"  />
                        </div>
                        <div class="field-set">
                            <input type="password" name="password"  class="form-control" placeholder="كلمة المرور الجديدة"
                                   required />
                        </div>

                        <div class="field-set">
                            <input type="password" name="password_confirmation"  class="form-control" placeholder="تأكيد كلمة المرور "
                                   required />
                        </div>

                        <div class="spacer-half"></div>

                        <div id="submit">
                            <input type="submit" id="send_message1" value="حفظ" class="btn btn-custom" />
                        </div>
                        <div class="col-12 flexy-two-links">
{{--                            <a href="{{route('register')}}">ليس لديك حساب؟ سجل الان</a>--}}
                            <a href="{{route('login')}}">تذكرت كلمة المرور؟ تسجيل دخول</a>
                        </div>
                    </form>
                </div>
                <div class="spacer-double"></div>
            </div>
        </div>
    </section>
@endsection
