@extends('site.layouts.layout')
@section('title','من نحن')

@section('content')
    <section id="section-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block d-xl-block text-center wow fadeInRight" data-wow-delay="0s">
                    <img class="relative img-fluid" src="{{asset('site/images/assets/5.svg')}}" alt=""/>
                </div>

                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0s">
                    <h2>
                        خذ<br/>
                        <span class="id-color">فكرة</span> واقرأ المزيد عنا
                    </h2>
                    <p>
                        {{@\App\Models\Setting::whereType('long_text')->where('name','about')->first()->value}}
                    </p>
                </div>

                <div class="spacer-double"></div>

                <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">

                </div>
            </div>


            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>مجلس الإدارة</h3>
                </div>

                <!--
                                        <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30">
                                            <div class="f-profile text-center">
                                                <div class="fp-wrap gray">
                                                    <div class="fpw-overlay">
                                                        <div class="fpwo-wrap">
                                                            <div class="fpwow-icons">
                                                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fpw-overlay-btm"></div>
                                                    <img src="images/assets/people1.jpg" class="fp-image img-fluid" alt="سمو الأميرة هند بنت عبدالرحمن أل سعود">
                                                </div>

                                                <h4>سمو الأميرة هند بنت عبدالرحمن أل سعود</h4>
                                                المؤسس
                                            </div>
                                        </div>
                -->

                <div class="col-md-6 single-member-wrapper">
                    <a data-fancybox="gallery" href="{{asset('site/images/people/member2.jpg')}}"><img
                            src="{{asset('site/images/people/member2.jpg')}}" alt=""></a>
                </div>
                <div class="col-md-6 single-member-wrapper">
                    <a data-fancybox="gallery" href="{{asset('site/images/people/member1.jpg')}}"><img
                            src="{{asset('site/images/people/member1.jpg')}}" alt=""></a>
                </div>

            </div>
        </div>
    </section>

    <section id="section-highlight">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="uptitle id-color">عن فكرة</span>إلى ماذا نسعى فى فكرة؟</h2>
                        <p class="lead">أن نصبح تجمع وطني دولي مزدهر وذو أثر عالمي يخلق حلول مبتكرة للتحديات المتجتمعية
                            وتكون بيئتنا محفزة ومثمرة تجمع الخبراء والمستشارين لإرساء شبكة للأبتكار والريادة الاجتماعية
                            والاقتصادية والبيئية</p>
                        <div class="spacer-20"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- feature box begin -->
                <div class="col-lg-6 col-md-6 mb40 wow fadeInUp" data-wow-delay="0s">
                    <div class="feature-box f-boxed style-3">
                        <i class="bg-color-2 i-circle fa fa-eye"></i>
                        <div class="text">
                            <a href="#">
                                <h4>رؤيتنا</h4>
                            </a>
                            شبكة للمشاريع الاجتماعية سعودية مزدهرة وذات أثر عميق.
                        </div>
                        <i class="wm fa fa-eye"></i>
                    </div>
                </div>
                <!-- feature box close -->

                <!-- feature box begin -->
                <div class="col-lg-6 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="feature-box f-boxed style-3">
                        <i class="bg-color i-circle fa fa-paper-plane-o"></i>
                        <div class="text">
                            <a href="#">
                                <h4>رسالتنا</h4>
                            </a>
                            تمكين المنشات الاجتماعية من خلال شبكة تحالف متكاملة ومحفزة
                        </div>
                        <i class="wm fa fa-paper-plane-o"></i>
                    </div>
                </div>
                <!-- feature box close -->

                <!-- feature box begin -->
                <div class="col-lg-6 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-box f-boxed style-3">
                        <i class="bg-color-3 i-circle fa fa-line-chart"></i>
                        <div class="text">
                            <a href="#">
                                <h4>قيمنا</h4>
                            </a>
                            نخضع، لتطبيق معايير عالية الجودة، ونتطلع للتشاركية، مع مؤسسات نتقطاع معها في المجال لتوحيد
                            الجهود.
                        </div>
                        <i class="wm i-circle fa fa-line-chart"></i>
                    </div>
                </div>

                <!-- feature box begin -->
                <div class="col-lg-6 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".75s">
                    <div class="feature-box f-boxed style-3">
                        <i class="bg-color i-circle fa fa-bullseye"></i>
                        <div class="text">
                            <a href="#">
                                <h4>أهدافنا</h4>
                            </a>
                            هدفنا هو أن تعم الخدمات التقنية أرجاء المملكة وتذخر بباقة من أمهر رواد المجال
                        </div>
                        <i class="wm i-circle fa fa-bullseye"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--

                <section class="no-top pos-top relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h2><span class="uptitle id-color">انجازاتنا</span>باقة من انجازاتنا السابقة</h2>
                                    <div class="spacer-20"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-body">
                                                <div class="row">
                                                    <div class="col-md-6 timeline-pic" data-bgimage="url(images/history/1.jpg)" style="background: url(&quot;images/history/1.jpg&quot;) 0% 0% / cover;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="timeline-story">
                                                            <h5>2017</h5>
                                                            <div class="clearfix"></div>
                                                            <h4>عنوان الحدث</h4>
                                                            <p>
                                                                تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="timeline-story">
                                                        <h5>2018</h5>
                                                        <div class="clearfix"></div>
                                                        <h4>عنوان الحدث</h4>
                                                        <p>
                                                            تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 timeline-pic" data-bgimage="url(images/history/2.jpg)" style="background: url(&quot;images/history/2.jpg&quot;) 0% 0% / cover;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-body">
                                                <div class="row">
                                                    <div class="col-md-6 timeline-pic" data-bgimage="url(images/history/3.jpg)" style="background: url(&quot;images/history/3.jpg&quot;) 0% 0% / cover;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="timeline-story">
                                                            <h5>2019</h5>
                                                            <div class="clearfix"></div>
                                                            <h4>عنوان الحدث</h4>
                                                            <p>
                                                                تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge"></div>
                                        <div class="timeline-panel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="timeline-story">
                                                        <h5>2020</h5>
                                                        <div class="clearfix"></div>
                                                        <h4>عنوان الحدث</h4>
                                                        <p>
                                                            تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث تفاصيل الحدث
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 timeline-pic" data-bgimage="url(images/history/4.jpg)" style="background: url(&quot;images/history/4.jpg&quot;) 0% 0% / cover;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </section>
    -->

    <section id="all-partners" class="pt60 pb60 text-light bg-color-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="uptitle id-color">الشركاء</span>شركاؤنا الاستراتيجيون</h2>
                        <div class="spacer-20"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">
                    <div id="owl-logo" class="logo-carousel owl-carousel owl-theme">
                        @foreach($partners as $partner)
                            <img src="{{getImgPath($partner->image)}}" class="img-fluid" alt=""/>
                        @endforeach
                    </div>
                </div>
                <img src="{{asset('site/images/assets/lamp.png')}}" alt="" class="the-lamp-img wow fadeInDown"
                     data-wow-delay="0s">
            </div>
        </div>
    </section>

@endsection
