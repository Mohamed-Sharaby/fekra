<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{asset('admin')}}/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme"
                     class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#">{{auth('admin')->user()->name}}</a></h5>
            <ul class="list-inline">
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.logout') }}" class="text-custom"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{route('admin.main')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i>
                        <span> الرئيسية </span> </a>
                </li>

                @can('Roles')
                    <li>
                        <a href="{{route('admin.roles.index')}}" class="waves-effect"><i
                                class="fa fa-balance-scale"></i> <span> الصلاحيات والمناصب </span> </a>
                    </li>
                @endcan

                @can('Admins')
                    <li>
                        <a href="{{route('admin.admins.index')}}" class="waves-effect"><i
                                class="fa fa-life-ring"></i> <span> الادارة  </span> </a>
                    </li>
                @endcan

                @can('Users')
                    <li>
                        <a href="{{route('admin.users.index')}}" class="waves-effect"><i
                                class="fa fa-users"></i> <span> الاعضاء  </span> </a>
                    </li>
                @endcan

                @can('Services')
                    <li>
                        <a href="{{route('admin.services.index')}}" class="waves-effect"><i
                                class="fa fa-database"></i> <span> الخدمات  </span> </a>
                    </li>
                @endcan

                @can('Blogs')
                    <li>
                        <a href="{{route('admin.blogs.index')}}" class="waves-effect"><i
                                class="zmdi zmdi-blogger"></i> <span> المدونة  </span> </a>
                    </li>
                @endcan

                @can('Partners')
                    <li>
                        <a href="{{route('admin.partners.index')}}" class="waves-effect"><i
                                class="fa fa-recycle"></i> <span> شركاؤنا  </span> </a>
                    </li>
                @endcan

                @can('Testimonials')
                    <li>
                        <a href="{{route('admin.testimonials.index')}}" class="waves-effect"><i
                                class="fa fa-comment"></i> <span> الاراء  </span> </a>
                    </li>
                @endcan

                @can('GuestMessages')
                    <li>
                        <a href="{{route('admin.guest-messages.index')}}" class="waves-effect"><i
                                class="zmdi zmdi-email"></i> <span> رسائل الزوار  </span> </a>
                    </li>
                @endcan

                @can('Settings')
                    <li>
                        <a href="{{route('admin.settings.index')}}" class="waves-effect"><i
                                class="zmdi zmdi-settings"></i> <span> الاعدادات   </span> </a>
                    </li>
                @endcan


                    <li>
                        <a href="{{route('admin.mail-lists.index')}}" class="waves-effect"><i
                                class="zmdi zmdi-surround-sound"></i> <span> الاشتراكات   </span> </a>
                    </li>


            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->
