@extends('site.layouts.layout')
@section('title','تسجيل حساب جديد')

@section('content')
    <!-- section begin -->
    <section id="subheader" data-bgimage="url(site/images/background/5.png) bottom">
        <div class="center-y relative text-center" data-scroll-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        {{--								<form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">--}}
                        <div class="col-md-12 text-center">
                            <h1>تسجيل جديد</h1>
                            <p>سجل الان من خلال الموقع بالمجان</p>
                        </div>
                        <div class="clearfix"></div>
                        {{--								</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section class="no-top" data-bgimage="url(site/images/background/3.png) top">
        <div class="container">
{{--            @include('dashboard.layouts.status')--}}
            <div class="row">
                <div class="col-md-8 m-auto mb-sm-30">
                    <form name="contactForm" id="signup_form" class="form-border" action="{{route('register')}}"
                          method="post">
                        @csrf

                        <div class="field-set">
                            <label for="type">نوع العضوية <span class="required-input">*</span></label>
                            <select name="membership_type" id="type" class="form-control"  style="margin-bottom: 0px!important;">
                                <option value="normal" {{old('membership_type') == 'normal' ? 'selected' : ''}}>عضوية عادية</option>
                                <option value="volunteer" {{old('membership_type') == 'volunteer' ? 'selected' : ''}}>متطوع</option>
                            </select>
                        </div>

                        <div class="field-set">
                            <label for="date">تاريخ الميلاد <span class="required-input">*</span></label>
                            <input type="date" id="date" name="birth_date" class="form-control {{$errors->has('birth_date') ? ' is-invalid' : null}}"
                                   value="{{old('birth_date')}}"
                                   placeholder="تاريخ الميلاد" style="margin-bottom: 0px!important;"/>
                            @error('birth_date')
                            <span class="invalid-feedback mt-0" style="color: #ef1010">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="field-set">
                            <label for="name">الاسم بالكامل <span class="required-input">*</span></label>
                            <input type="text" name="name" id="name" class="form-control {{$errors->has('name') ? ' is-invalid' : null}}"
                                   value="{{old('name')}}"
                                   placeholder="الاسم بالكامل" style="margin-bottom: 0px!important;"/>
                            @error('name')
                            <span class="invalid-feedback mt-0" style="color: #ef1010">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>


                        <div class="field-set">
                            <label for="identity">رقم الهوية <span class="required-input">*</span></label>
                            <input type="text" name="identity" id="identity" class="form-control {{$errors->has('identity') ? ' is-invalid' : null}}"
                                   value="{{old('identity')}}"
                                   placeholder="رقم الهوية" style="margin-bottom: 0px!important;"/>
                            @error('identity')
                            <span class="invalid-feedback mt-0" style="color: #ef1010">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>


                        <div class="field-set">
                            <label for="phone">الجوال <span class="required-input">*</span></label>
                            <input type="text" name="phone" id="phone" class="form-control {{$errors->has('phone') ? ' is-invalid' : null}}"
                                   value="{{old('phone')}}"
                                   placeholder="الجوال" style="margin-bottom: 0px!important;"/>
                            @error('phone')
                            <span class="invalid-feedback mt-0" style="color: #ef1010">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="field-set">
                            <label for="email">البريد الإلكتروني </label>
                            <input type="text" name="email" id="email" class="form-control {{$errors->has('email') ? ' is-invalid' : null}}"
                                   value="{{old('email')}}"
                                   placeholder="البريد الإلكتروني" style="margin-bottom: 0px!important;"/>
                            @error('email')
                            <span class="invalid-feedback mt-0" style="color: #ef1010">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="field-set">
                            <label for="password">كلمة المرور <span class="required-input">*</span></label>
                            <input type="password" name="password" id="password" class="form-control {{$errors->has('password') ? ' is-invalid' : null}}"
                                   placeholder="كلمة المرور" style="margin-bottom: 0px!important;"/>
                            @error('password')
                            <span class="invalid-feedback mt-0" style="color: #ef1010">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="field-set">
                            <label for="re-password">تأكيد كلمة المرور <span class="required-input">*</span></label>
                            <input type="password" name="password_confirmation" id="re-password" class="form-control {{$errors->has('password_confirmation') ? ' is-invalid' : null}}"
                                   placeholder="تأكيد كلمة المرور" style="margin-bottom: 0px!important;"/>
                            @error('password_confirmation')
                            <span class="invalid-feedback mt-0" style="color: #ef1010">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>


                        <div class="spacer-half"></div>

                        <div id="submit">
                            <input type="submit" id="send_messagex" value="تسجيل " class="btn btn-custom"/>
                        </div>
                        <div class="col-12 flexy-two-links">
                            <a href="{{route('login')}}">هل لديك حساب بالفعل؟ تسجيل دخول</a>
                        </div>
                    </form>
                </div>
                <div class="spacer-double"></div>
            </div>
        </div>
    </section>
@endsection
