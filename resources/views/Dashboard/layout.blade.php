<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>لوحة التحكم</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{url('assets/img/talka_logo.jpg')}}">

        <!-- App css -->
        <link href="{{url('assets/dashboard_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/dashboard_assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/dashboard_assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div> -->


        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="mdi mdi-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">

                        <a href="#" class="logo"><img src="{{asset('assets/dashboard_assets/images/logo_dark.png')}}" height="20" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">الرئيسية</li>

                            <li>
                                <a href="{{url('/dashboard')}}" class="waves-effect">
                                    <i class="dripicons-home"></i>
                                    <span> لوحة التحكم </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('/messages')}}" class="waves-effect">
                                    <i class="ion ion-md-mail-unread"></i>
                                    <span> الشكاوي والرسائل <span class="badge badge-talka badge-pill float-right">3</span></span>
                                </a>
                            </li>

                            @can('access-users')
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-person"></i> <span> المستخدمون </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('users.index')}}">عرض كل المستخدمين</a></li>
                                    {{-- @can('create-users')
                                    <li><a href="{{route('users.create')}}">إضافة مستخدم جديد</a></li>
                                    @endcan --}}
                                </ul>
                            </li>
                            @endcan

                            @can('access-offers')
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-pizza"></i> <span> العروض </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('offers.index')}}">عرض كل العروض</a></li>
                                    @can('create-offers')
                                    <li><a href="{{route('offers.create')}}">إضافة عرض جديد</a></li>
                                    @endcan
                                </ul>
                            </li>
                            @endcan

                            @can('access-restaurants')
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-cafe"></i> <span> المطاعم </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('restaurants.index')}}">عرض كل المطاعم</a></li>
                                    @can('create-restaurants')
                                    <li><a href="{{route('restaurants.create')}}">إضافة مطعم جديد</a></li>
                                    @endcan
                                </ul>
                            </li>
                            @endcan

                            @can('access-orders')
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-basket"></i> <span> الطلبات </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('orders.index')}}">عرض كل الطلبات</a></li>
                                    <li><a href="{{route('orders.create')}}">إضافة طلب جديد</a></li>
                                </ul>
                            </li>
                            @endcan

                            @can('access-food_types')
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-filing"></i> <span> الاصناف </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('food_types.index')}}">عرض كل الاصناف</a></li>
                                    @can('create-food_types')
                                    <li><a href="{{route('food_types.create')}}">إضافة صنف جديد</a></li>
                                    @endcan
                                </ul>
                            </li>
                            @endcan

                            @can('access-roles')
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-key"></i> <span> الصلاحيات </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('roles.index')}}">عرض كل الصلاحيات</a></li>
                                    @can('create-roles')
                                    <li><a href="{{route('roles.create')}}">إضافة صلاحية جديدة</a></li>
                                    @endcan
                                </ul>
                            </li>
                            @endcan

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-trash"></i> <span> سلة المحذوفات </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('users.trash')}}">المستخدمون المحذوفون</a></li>
                                    <li><a href="{{route('restaurants.trash')}}">المطاعم المحذوفة</a></li>
                                    <li><a href="{{route('orders.trash')}}">الطلبات المحذوفة</a></li>
                                    <li><a href="{{route('offers.trash')}}">العروض المحذوفة</a></li>
                                    <li><a href="{{route('food_types.trash')}}">الاصناف المحذوفة</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">
                                <a href="{{url('/dashboard')}}" class="logo"><img src="{{url('assets/dashboard_assets/images/logo.png')}}" height="22" alt="logo"></a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                             <!-- Search input -->
                             <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon" style="color: #e49d47;"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell-outline noti-icon" style="color: #e49d47;"></i>
                                        <span class="badge badge-danger badge-pill noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>الإشعارات (3)</h5>
                                        </div>

                                        <div class="slimscroll-noti">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                                <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                                <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>

                                        </div>


                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            عرض الكل
                                        </a>

                                    </div>
                                </li>


                                <li class="list-inline-item dropdown notification-list nav-user">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="{{url('assets/dashboard_assets/images/users/avatar-6.jpg')}}" alt="user" class="rounded-circle">
                                        <span class="d-none d-md-inline-block ml-lg-2" style="color: #e49d47;">{{ Auth::user()->name }}<i class="mdi mdi-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <a class="dropdown-item" href="{{route('profile.edit')}}"><i class="dripicons-user text-muted"></i> الملف الشخصي</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> الإعدادات</a>
                                        <div class="dropdown-divider"></div>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                            this.closest('form').submit();"><i class="dripicons-exit text-muted"></i> {{ __('Log Out') }}</a>
                                        </form>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" style="color: #e49d47;"
                                    aria-haspopup="false" aria-expanded="false">
                                        Create New <i class="mdi mdi-plus"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                                <li class="list-inline-item notification-list d-none d-sm-inline-block">
                                    <a href="{{url('/')}}" class="nav-link waves-effect" >
                                        الرئيسية
                                    </a>
                                </li>

                            </ul>


                        </nav>

                    </div>
                    <!-- Top Bar End -->

                </div> <!-- content -->

                @yield('content')

                <footer class="footer">
                    <span class="d-none d-md-inline-block">© 2023 جميع الحقوق محفوظة لدى <a href="#" style="color: #e49d47;">الحكومة</a></span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{url('assets/dashboard_assets/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/dashboard_assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('assets/dashboard_assets/js/modernizr.min.js')}}"></script>
        <script src="{{url('assets/dashboard_assets/js/detect.js')}}"></script>
        <script src="{{url('assets/dashboard_assets/js/fastclick.js')}}"></script>
        <script src="{{url('assets/dashboard_assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{url('assets/dashboard_assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{url('assets/dashboard_assets/js/waves.js')}}"></script>
        <script src="{{url('assets/dashboard_assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{url('assets/dashboard_assets/js/jquery.scrollTo.min.js')}}"></script>


        <!-- dashboard js -->
        <script src="{{url('assets/dashboard_assets/pages/dashboard.int.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assets/dashboard_assets/js/app.js')}}"></script>

    </body>
</html>
