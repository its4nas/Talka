<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zinzer - Responsive Bootstrap 4 Admin Dashboard</title>
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
        <div class="account-pages">
            
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-1">
                        <div class="text-left">
                            <div>
                                <a href="index.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="28" alt="logo"></a>
                            </div>
                            <h5 class="font-14 text-muted mb-4">Responsive Bootstrap 4 Admin Dashboard</h5>
                            <p class="text-muted mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>

                            <h5 class="font-14 text-muted mb-4">Terms :</h5>
                            <div>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>At solmen va esser necessi far uniform paroles.</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Donec sapien ut libero venenatis faucibus.</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Nemo enim ipsam voluptatem quia voluptas sit .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h4 class="text-muted float-right font-18 mt-4">إنشاء حساب جديد</h4>
                                    <div>
                                        <a href="index.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="28" alt="logo"></a>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                                        @csrf


                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="name" id="name" required="" placeholder="ادخل اسمك" value="{{old('name')}}">
                                            </div>
                                        </div>
                                        @error('name')
                                            <div style="color:red" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror


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

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="phone" id="phone" required="" placeholder="رقم الهاتف" value="{{old('phone')}}">
                                            </div>
                                        </div>
                                        @error('phone')
                                            <div style="color:red" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror


                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" name="password" id="password" type="password" required="" placeholder="كلمة السر">
                                            </div>
                                        </div>
                                        @error('password')
                                            <div style="color:red" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" required="" placeholder="تأكيد كلمة السر">
                                            </div>
                                        </div>
                                        @error('password_confirmation')
                                            <div style="color:red" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label font-weight-normal" for="customCheck1">انا اقبل <a href="#" class="text-primary">الشروط والاحكام</a></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                            </div>
                                        </div>

                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-12 m-t-20 text-center">
                                                <a href="{{ route('login') }}" class="text-muted">هل تمتلك حساب مسبق؟</a>
                                            </div>
                                        </div>
                                    </form>

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
