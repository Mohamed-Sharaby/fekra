<header class="header-light transparent scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="align-self-center header-col-left">
                        <!-- logo begin -->
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{route('site.home')}}">
                                <img alt="" src="{{asset('site/images/assets/logo.png')}}"/>
                            </a>
                        </div>
                        <!-- logo close -->
                        <!-- logo close -->
                    </div>
                    <div class="align-self-center ml-auto header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li class="active"><a href="{{route('site.home')}}">الرئيسية</a></li>
                            <li><a href="{{route('site.about')}}">من نحن</a></li>
                            <li><a href="{{route('site.services')}}">خدماتنا</a></li>
                            <!--<li><a href="projects.html">مشاريعنا</a></li>-->
                            <!--<li><a href="activities.html">مبادراتنا</a></li>-->
                            <li><a href="{{route('site.blog')}}">الأخبار</a></li>
                            <li><a href="{{route('site.contact')}}">اتصل بنا</a></li>
                        </ul>
                    </div>
                    @if (auth()->check())
                    <div class="align-self-center ml-auto header-col-right">
                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            تسجيل الخروج
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              class="d-none">
                            @csrf
                        </form>
                    </div>

                    @else
                        <div class="align-self-center ml-auto header-col-right">
                            <a class="btn-custom" href="{{route('login')}}"><i class="fa fa-arrow-left"></i> دخول</a>
                            <span id="menu-btn"></span>
                        </div>
                    @endif
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</header>
