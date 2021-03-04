<header class="header-light transparent scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="align-self-center header-col-left">
                        <!-- logo begin -->
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{url('/')}}">
                                <img alt="" src="{{asset('site')}}/images/assets/logo.png"/>
                            </a>
                        </div>
                        <!-- logo close -->
                        <!-- logo close -->
                    </div>
                    <div class="align-self-center ml-auto header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li class="active"><a href="{{url('/')}}">الرئيسية</a></li>
                            <li><a href="{{url('/about')}}">من نحن</a></li>
                            <li><a href="{{url('/services')}}">خدماتنا</a></li>
                            <!--<li><a href="projects.html">مشاريعنا</a></li>-->
                            <!--<li><a href="activities.html">مبادراتنا</a></li>-->
                            <li><a href="{{url('/blog')}}">الأخبار</a></li>
                            <li><a href="{{url('/contact')}}">اتصل بنا</a></li>
                        </ul>
                    </div>
                    <div class="align-self-center ml-auto header-col-right">
                        <a class="btn-custom" href="{{url('/login')}}"><i class="fa fa-arrow-left"></i> دخول</a>
                        <span id="menu-btn"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</header>
