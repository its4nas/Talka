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
                    <div class="col-lg-5">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h4 class="text-muted float-right font-18 mt-4">إعادة تعيين كلمة المرور</h4>
                                    <div>
                                        <a href="index.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="28" alt="logo"></a>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <form class="form-horizontal m-t-20"  method="POST" action="{{ route('password.store') }}">
                                        @csrf

                                        <!-- Password Reset Token -->
                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">


                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="email" name="email" readonly id="email" required="" placeholder="البريد الالكتروني" value="{{old('email',$request->email)}}">
                                            </div>
                                        </div>
                                        @error('email')
                                            <div style="color:red" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" name="password" id="password" type="password" required="" placeholder="كلمة السر الجديدة">
                                            </div>
                                        </div>
                                        @error('password')
                                            <div style="color:red" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" required="" placeholder="تأكيد كلمة السر الجديدة">
                                            </div>
                                        </div>
                                        @error('password_confirmation')
                                            <div style="color:red" role="alert">
                                                {{$message}}
                                            </div>
                                        @enderror

                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">اعادة تعيين كلمة السر</button>
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

