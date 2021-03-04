@extends('site.layouts.layout')
@section('title','فكرة للإبتكار وريادة الأعمال')
<!-- content begin -->
@section('content')
    <section class="full-height vertical-center has-a-bg" id="first-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s">

                    <div class="h1">مرحبا, هل تسعى<br>إلي
                        <div class="typed-strings">
                            <p><span class="id-color">التكامل</span></p>
                            <p><span class="id-color">التمكين</span></p>
                            <p><span class="id-color">الابتكار</span></p>
                        </div>
                        <div class="typed"></div>
                    </div>

                    <p class="lead">إذا أنت على الطريق الصحيح مع فكرة , </p>
                    <div class="spacer-20"></div>
                    <a class="btn-custom" href="about.html">من نحن</a>&nbsp;
                    <a class="btn-border" href="contact.html">تواصل الان</a>
                    <div class="mb-sm-30"></div>
                </div>

                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".5s">
                    <img src="{{asset('site')}}/images/assets/1.png" class="img-fluid" alt=""/>
                </div>
            </div>
        </div>
    </section>
    <section id="section-highlight" class="has-a-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="uptitle id-color">عن فكرة</span>إلى ماذا نسعى فى فكرة؟</h2>
                        <p class="lead">أن نصبح تجمع وطني دولي مزدهر وذو أثر عالمي يخلق حلول مبتكرة للتحديات
                            المتجتمعية وتكون بيئتنا محفزة ومثمرة تجمع الخبراء والمستشارين لإرساء شبكة للأبتكار
                            والريادة الاجتماعية والاقتصادية والبيئية</p>
                        <div class="spacer-20"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- feature box begin -->
                <div class="col-lg-4 col-md-6 mb40 wow fadeInUp" data-wow-delay="0s">
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
                <div class="col-lg-4 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".25s">
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
                <div class="col-lg-4 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-box f-boxed style-3">
                        <i class="bg-color-3 i-circle fa fa-line-chart"></i>
                        <div class="text">
                            <a href="#">
                                <h4>قيمنا</h4>
                            </a>
                            نخضع، لتطبيق معايير عالية الجودة، ونتطلع للتشاركية، مع مؤسسات نتقطاع معها في المجال
                            لتوحيد الجهود.
                        </div>
                        <i class="wm i-circle fa fa-line-chart"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="all-partners" class="pt60 pb60 text-light bg-color-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">
                    <div id="owl-logo" class="logo-carousel owl-carousel owl-theme">
                        <img src="{{asset('site')}}/images/assets/partner12.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner1.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner2.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner3.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner4.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner5.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner6.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner7.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner8.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner9.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner10.png" class="img-fluid" alt=""/>
                        <img src="{{asset('site')}}/images/assets/partner11.png" class="img-fluid" alt=""/>
                    </div>
                </div>
                <img src="{{asset('site')}}/images/assets/lamp.png" alt="" class="the-lamp-img wow fadeInDown" data-wow-delay="0s">
            </div>
        </div>
    </section>
    <section id="section-banner" class="no-top has-a-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block d-xl-block text-center wow fadeInRight" data-wow-delay="0s">
                    <img class="relative img-fluid" src="{{asset('site')}}/images/assets/5.svg" alt=""/>
                </div>

                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0s">
                    <h2>
                        خذ<br/>
                        <span class="id-color">فكرة</span> واقرأ المزيد عنا
                    </h2>
                    <p>
                        فكرة للإبتكار رويادة الاعمال الاجتماعية هي جمعية أهلية مهنية غير هادفة للربح مسجلة بنظام
                        الجمعيات المؤسسات الأهلية برقم (1910) بمنطقة القصيم ومقرها الرئيسي محافظة عنيزة بقرار معالي
                        وزير الموارد البشرية والتنمية الاجتماعية صادر رقم 10234 وتاريخ 18/01/1442ه وتحت إشراف الوحدة
                        الاشرافية بمنظومة التجارة لها شخصيتها الإعتبارية ويمثلها رئيس مجلس الإدارة بتفويض الجمعية
                        العمومية
                    </p>
                    <div class="spacer-half"></div>
                    <a class="btn-custom" href="about.html">اقرأ المزيد</a>
                </div>

                <div class="spacer-double"></div>

                <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">

                </div>
            </div>
        </div>
    </section>
    <section>


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="uptitle id-color">الخدمات</span>تعرف على بعض خدماتنا</h2>
                        <div class="spacer-20"></div>
                    </div>
                </div>
                <div id="owl-features" class="owl-carousel owl-theme">

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>تصميم الفعاليات والمؤتمرات المتخصصة في التنمية المستدامة</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>إدارة وتنفيذ حملات التغيير الاجتماعي بوسائل التواصل الاجتماعي</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>تصميم الفرص التطوعية في المنظمات غير الربحية</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>بناء وحدات التطوع والمسئولية المجتمعية فى المنشأت</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>تقديم ورش عمل لتمكين الشباب من المبادئ والطرق المنهجية المتبعة بالتطوع المؤسسي</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>دراسة الطرق الأخرى والمبتكرة والمتاحة لجمع التبرعات</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>تقديم الاستشارات والدراسات وتصميم المبدارات النوعية</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>عقد الشراكات الاجتماعية وفق أولويات المنظمات الأهلية</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>تنفيذ وبناء استراتيجيات التسويق للمنظمات غير الربحية</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>البحث عن البرامج التي يمكن للمنظمات الأهلية المشاركة فيها</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>تدريب وتأهيل الفرق ومدراء التطوع فى المنظمات لتحقيق أثر أعمق</h4>
                    </div>

                    <div class="feature-box-type-2">
                        <img src="{{asset('site')}}/images/assets/logo.png" alt="">
                        <h4>تيسير وتنظيم ورش العمل لتخطيط وتطويرتنفيذ الاستراتيجيات</h4>
                    </div>


                </div>

                <div class="col-md-12 text-center mtop60">
                    <a class="btn-custom" href="services.html">كل الخدمات</a>
                </div>

            </div>
        </div>

    </section>
    <section id="section-testimonial" class="has-a-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="uptitle id-color">الأراء</span>ماذا يقولون عنا</h2>
                        <div class="spacer-20"></div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme wow fadeInUp" id="opinions-carousel">
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>انطلق مفهوم ريادة الأعمال من مصطلح التغيير والتطوير الذي ارتبط ارتباطا وثيقا
                                بالاقتصاد</p>
                            <div class="de_testi_by">
                                <div class="member-photo">
                                    <img alt="" class="rounded-circle" src="{{asset('site')}}/images/people/p1.png"/>
                                </div>
                                <span>أ.د / سهام اّل إسماعيل</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>العمل التطوعي هو رسالة أصلها ومنبعها الدين الاسلامي لما فيها من أثر ايجابي للفرد
                                والمجتمع</p>
                            <div class="de_testi_by">
                                <div class="member-photo">
                                    <img alt="" class="rounded-circle" src="{{asset('site')}}/images/people/p2.png"/>
                                </div>
                                <span>د / أحمد بابدر </span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>قبل أن يبدأ مفهوم المسئولية الاجتماعية من الشركات اصطلاحا , فهو كان ولا زال مبدأ
                                نطبقه كأفراد وجماعات</p>
                            <div class="de_testi_by">
                                <div class="member-photo">
                                    <img alt="" class="rounded-circle" src="{{asset('site')}}/images/people/p3.png"/>
                                </div>
                                <span>أ / فادي الرابغي</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi opt-2">
                        <blockquote>
                            <p>حينما يصبح الابتكار وريادة الأعمال تحالفا وطنيا تشترك مختلف المؤسسات والكيانات وأفراد
                                المجتمع فى تحقيقه</p>
                            <div class="de_testi_by">
                                <div class="member-photo">
                                    <img alt="" class="rounded-circle" src="{{asset('site')}}/images/people/p4.png"/>
                                </div>
                                <span>أ / عبدالرحمن الخلف</span>
                            </div>
                        </blockquote>
                    </div>
                </div>

            </div>


        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="uptitle id-color">المدونة</span>أطلع على أخر الأخبار</h2>
                        <div class="spacer-20"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <a href="single-blog.html">
                                    <img alt="" src="{{asset('site')}}/images/news/1.jpg">
                                </a>
                                <div class="post-info">
                                    <div class="inner">
                                        <span class="post-date">منذ 10 ساعات</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-text">
                                <h4><a href="#" title="ساعات قليلة وننطلق  , وش تتوقعون مجهزين لكم !">ساعات قليلة
                                        وننطلق , وش تتوقعون مجهزين لكم !</a></h4>
                                <p>
                                    بات الان بضع ساعات قليلة فقط تفصلنا عن انطلاق مفاجئة كبيرة , ترقبونا
                                    بالانتظاااار ... دمتم سالمين
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb30">
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <a href="single-blog.html">
                                    <img alt="" src="{{asset('site')}}/images/news/1.jpg">
                                </a>
                                <div class="post-info">
                                    <div class="inner">
                                        <span class="post-date">منذ 10 ساعات</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-text">
                                <h4><a href="#" title="أميرة العطاااء">أميرة العطاااء</a></h4>
                                <p>
                                    أميرة العطاء , عندها شي جديد حل لتحدي مبتكر ويتمتع بالاستدامة المالية بس وشو كله
                                    كم يوم وندري ....
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="section-fun-facts" class="pt60 pb60 text-light bg-color-3">
        <div class="container">
            <div class="all-event-timer-wrapper">
                <div class="event-timer-wrapper">
                    <div class="single-event-timer">
                        <img src="{{asset('site')}}/images/countdown.svg" class="countdown-img" alt="">
                        <h1>انطلاق الموقع الالكتروني للجمعية</h1>
                        <h3>February 21, 2021 21:00:00</h3>
                        <div class="clockdiv" data-date="February 21, 2021 21:00:00">
                            <div>
                                <span class="days"></span>
                                <div class="smalltext">يوم</div>
                            </div>
                            <div>
                                <span class="hours"></span>
                                <div class="smalltext">ساعة</div>
                            </div>
                            <div>
                                <span class="minutes"></span>
                                <div class="smalltext">دقيقة</div>
                            </div>
                            <div>
                                <span class="seconds"></span>
                                <div class="smalltext">ثانية</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="event-timer-wrapper">
                    <div class="single-event-timer">
                        <img src="{{asset('site')}}/images/countdown.svg" class="countdown-img" alt="">
                        <h1>اعلان الفائز بالمونديال الرقمي</h1>
                        <h3>September 26, 2020 7:30:00</h3>
                        <div class="clockdiv" data-date="September 26, 2020 7:30:00">
                            <div>
                                <span class="days"></span>
                                <div class="smalltext">يوم</div>
                            </div>
                            <div>
                                <span class="hours"></span>
                                <div class="smalltext">ساعة</div>
                            </div>
                            <div>
                                <span class="minutes"></span>
                                <div class="smalltext">دقيقة</div>
                            </div>
                            <div>
                                <span class="seconds"></span>
                                <div class="smalltext">ثانية</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
<!-- content close -->

