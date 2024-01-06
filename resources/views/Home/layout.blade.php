<!DOCTYPE html>
<html lang="en">
{{-- second comment --}}
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>طلقة</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/img/talka_logo.jpg')}}" rel="icon">
  <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/styleRTL.css')}}" rel="stylesheet">

</head>

<body class="rtl">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">طلقة</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="#about">من نحن</a></li>
          <li><a class="nav-link scrollto" href="#services">خدماتنا</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#contact">تواصل بنا</a></li>

          <li>@if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                <li><a class="nav-link scrollto" href="{{route('view_cart')}}">  <i class="bi bi-cart4" style="font-size: 18px"></i>   السلة </a></li>
                <li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li><a href="{{route('profile.edit')}}">الملف الشخصي<i class="dripicons-user"></i></a></li>
              <li><a href="#">الاعدادات</a></li>
              <li><form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="nav-link scrollto" href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    تسجيل خروج
            </a>
            </form></li>
            </ul>
          </li>

                @else


                <li class="dropdown"><a href="#"><span>تسجيل</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">تسجيل دخول</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">إنشاء حساب</a>
                    @endif
            </ul>
          </li>

                @endauth
            </div>
        @endif</li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  @yield('content')

<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>تواصل بنا</h2>
            <p>اذا حابب تزورنا، تتواصل بنا او حتى عندك شكوى وتشتي توصلها لنا
              احنا موجودين في اي وقت وتقدر تتواصل معانا من اي مكان
              عبر الوسائل التالية:
            </p>
          </div>

          <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>العنوان:</h4>
                  <p>صنعاء - الستين الجنوبي - خلف شركة ناتكو</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>البريد الإلكتروني:</h4>
                  <p>talkaa.ye@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>جوال:</h4>
                  <p>+967775605070</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="{{route('messages.store')}}" method="post" role="form" class="php-email-form">
                  @csrf
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">الأسم:</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">البريد الإلكتروني:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">الموضوع:</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">الرسالة:</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">جاري المعالجة...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">تم ارسال رسالتك، شكرًا لك.</div>
                </div>
                <div class="text-center"><button type="submit">إرسال الرسالة</button></div>
              </form>
            </div>
          </div>

        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

      <!-- <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Join Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div> -->

      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>طلقة</h3>
              <p>
                اليمن <br>
                صنعاء<br>
                 شارع الستين الجنوبي<br><br>
                <strong>الجوال:</strong> +967775605070<br>
                <strong>البريد الإلكتروني:</strong> talkaa.ye@gmail.com<br>
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">الرئيسية</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">من نحن</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">خدماتنا</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">تواصل بنا</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>خدماتنا</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">توصيل طلبات</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">نقل افراد</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">توصيل طرود</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">نقل بضائع</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">شحن دولي</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>حساباتنا في مواقع التواصل الإجتماعي</h4>
              <p>يمكنك التواصل معنا عن طريق الحسابات الخاصة بنا على مواقع التواصل الإجتماعي.</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="#" class="google-paly"><i class="bi bi-google-play"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; جميع الحقوق محفوظة لدى <strong><span><a href="instagram/s_uiii_">الحكومة</a></span></strong>
        </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('assets/js/main.js')}}"></script>

  </body>

  </html>
