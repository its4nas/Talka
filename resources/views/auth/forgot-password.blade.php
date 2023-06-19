<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>forget-password</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="{{url('assets/dashboard_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets/dashboard_assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets/dashboard_assets/css/style.css')}}" rel="stylesheet" type="text/css">


    </head>


    <body class="fixed-left">

        <!-- Begin page -->


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="account-pages">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-1">
                        <div class="text-left">
                            <div>
                                <a href="index.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="28" alt="logo"></a>
                            </div>
                            <h5 class="font-14 text-muted mb-4">Responsive Bootstrap 4 Admin Dashboard</h5>
                            <p class="text-muted mb-4">نسيت كلمة المرور الخاصة بك؟؟ لا تقلق
                                 خلينا نعرف بس بريدك الالكنروني واحنا نرسل لك رابط عشان تسوي واحدة جديدة.</p>


                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="text-center">
                                    <div>
                                        <a href="index.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="28" alt="logo"></a>
                                    </div>
                                    <h4 class="text-muted font-18 mt-4">إعادة تعيين كلمة المرور</h4>
                                </div>

                                <div class="p-2">
                                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><br>
                                            ادخل <b>بريدك الالكتروني</b> وسيتم ارسال رابط اعادة التعين لك
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="email" name="email" id="email" required="" placeholder="البريد الالكتروني" value="{{old('email')}}">
                                            </div>
                                        </div>
                                        @error('email')
                                            <div style="color:red" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror

                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">ارسل البريد الالكتروني</button>
                                            </div>
                                        </div>

                                    </form>
                                    <!-- end form -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>


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

        <!-- App js -->
        <script src="{{url('assets/dashboard_assets/js/app.js')}}"></script>

    </body>
</html>
