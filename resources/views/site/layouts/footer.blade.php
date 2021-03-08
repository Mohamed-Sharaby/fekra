<footer class="footer-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <a href="{{route('site.home')}}"><img alt="" class="logo" src="{{asset('site/images/assets/logo.png')}}"></a>
                    <div class="spacer-20"></div>
                    <p>
                        {{@\App\Models\Setting::whereType('long_text')->where('name','footer_text')->first()->value}}
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5>روابط سريعة</h5>
                    <ul>
                        <li class="active"><a href="{{route('site.home')}}">الرئيسية</a></li>
                        <li><a href="{{route('site.about')}}">من نحن</a></li>
                        <li><a href="{{route('site.services')}}">خدماتنا</a></li>
                        <!--<li><a href="projects.html">مشاريعنا</a></li>-->
                        <!--<li><a href="activities.html">مبادراتنا</a></li>-->
                        <li><a href="{{route('site.blog')}}">الأخبار</a></li>
                        <li><a href="{{route('site.contact')}}">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5>النشرة الاخبارية</h5>

                    <p>اشترك الان في نشرتنا الاخبارية وكن على اطلاع بكل ماهو جديد عنا</p>
                    {{--/////////////////////////////////////////////////////////--}}
                    <div class="msg2" style="display: none;">
                        <div class="alert alert-success alert-dismissable  " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p class="m-0 text-center">تم حفظ البريد الالكترونى بنجاح</p>
                        </div>
                    </div>
                    <p class="error12 text-center mr-0 ml-0" style="margin-right: 100px;margin-left: 100px;"></p>
                    {{--/////////////////////////////////////////////////////////--}}
                    <form action="#" class="row" id="form_subscribe">
                        @csrf

                        <div class="col text-center">
                            <input class="form-control"  value="" name="email" id="email11"
                                   placeholder="ادخل البريد الالكتروني الخاص بك" type="text"/>
                            <a href="#" id="btn-submit"><i class="arrow_left"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <div class="spacer-10"></div>
                    <small>بريدك الالكتروني في أمان , لاتقلق</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 sm-text-center mb-sm-30">
                <div class="mt10">&copy; حميع الحقوق محفوظة جمعية فكرة 2021</div>
            </div>
            <div class="col-md-6 text-md-right text-sm-left">
                <div class="social-icons">
                    <a href=" {{@\App\Models\Setting::whereType('url')->where('name','facebook')->first()->value}}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href=" {{@\App\Models\Setting::whereType('url')->where('name','twitter')->first()->value}}" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href=" {{@\App\Models\Setting::whereType('url')->where('name','instagram')->first()->value}}" target="_blank"><i
                            class="fa fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
