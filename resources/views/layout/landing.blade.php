<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/landing/css/normalize.css">
    <link rel="stylesheet" href="/landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="/landing/css/all.min.css">
    <link rel="stylesheet" href="/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/landing/css/style.css">
    <link rel="stylesheet" href="/landing/css/rtl.css">

    <title>رؤى</title>

    @yield('styles')
</head>

<body>
    <!-- Start Navbar -->
    <div class="main-nav-bar arabic-dir">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <div class="roaa-home-logo">
                        <a href="#" class="logo"></a>
                        <a class="navbar-brand" href="{{ route('home') }}">منصة رؤى</a>

                    </div>

                    <button class="navbar-toggler toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('courses.categories') }}">الدورات</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('books') }}">الكتب</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('files') }}">الملفات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('about') }}">
                                    من نحن
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('contact') }}">
                                    تواصل معنا
                                </a>
                            </li>
                            <form class="d-flex">
                                <img src="/landing/images/Search.png" alt="">

                                <input class="form-control me-2" type="search" placeholder="يمكنك البحث عن الدورات، الكتب، الملفات" aria-label="Search">
                            </form>

                            @if (auth()->check())
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="user-img" src="/landing/images/user.png" alt="">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="Profile.html">
                                                <i class="fa-thin fa-user"></i> البيانات الشخصية

                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item selected" href="Courses.html">

                                                <div class="selected-word">
                                                    <i class="fa-thin fa-circle-play"></i> الدورات
                                                </div>
                                                <div class="selected-favor">
                                                    <i class="fa-light fa-heart"></i> المفضلة
                                                </div>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="Settings.html">
                                                <i class="fa-light fa-gear"></i> الاعدادات
                                            </a>
                                        </li>

                                        <br>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-reload="true"">
                                                <i class="fa-light fa-right-from-bracket"></i> الخروج
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('login') }}">
                                        تسجيل الدخول
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('register') }}">
                                        التسجيل
                                    </a>
                                </li>
                            @endif

                            {{-- <li class="nav-item">
                                <a class="nav-link " href="#">English</a>
                            </li> --}}
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navbar -->




    @yield('content')


    <!-- Start Footer  -->
    <div class="footer-body">
        <div class="container">
            <div class="footer-content row arabic-dir">
                <div class="footer-logo col-lg-3">
                    <div class="logo-sec">
                        <img src="/landing/images/Logo.png" alt="">
                        <span class="logo-name">منصة رؤى</span>
                    </div>
                    <p class="explane-title">
                        في بعض الوكالات في 90 تعميم نص <br>يسمى الترام الأصفر أو المترو الأصفر </p>
                </div>
                <div class="footer-serv col-4 col-lg-2">
                    <a href="{{ route('home') }}" class="main-link">الرئيسية</a>
                    <div class="list-unstyled">
                        <li class="footer-links">
                            <a href="{{ route('courses') }}">الدورات</a>
                        </li>
                        <li class="footer-links">
                            <a href="{{ route('books') }}">الكتب</a>
                        </li>
                        <li class="footer-links">
                            <a href="{{ route('files') }}">الملفات</a>
                        </li>
                    </div>
                </div>
                <div class="footer-policy col-4 col-lg-2">
                    <a href="{{ route('home') }}" class="main-link">الرئيسية</a>
                    <div class="list-unstyled">
                        <li class="footer-links">
                            <a href="Privacy-policies.html">سياسة الخصوصية</a>
                        </li>
                        <li class="footer-links">
                            <a href="Policy-usage.html">سياسة الاستخدام</a>
                        </li>
                        <li class="footer-links">
                            <a href="Terms.html">الشروط و الأحكام</a>
                        </li>
                    </div>
                </div>
                <div class="footer-about col-4 col-lg-2">
                    <a href="{{ route('home') }}" class="main-link">الرئيسية</a>
                    <div class="list-unstyled">
                        <li class="footer-links">
                            <a href="About-us.html">عن المنصة</a>
                        </li>
                        <li class="footer-links">
                            <a href="Contact-us.html">تواصل معنا</a>
                        </li>

                    </div>
                </div>
                <div class="footer-social col-lg-3">
                    <h5 class="happy-con">
                        نسعد بمتابعتكم لنعا عبر
                    </h5>
                    <div class="social-links row">
                        <img src="/landing/images/facebook.png" alt="">
                        <img src="/landing/images/instagram.png" alt="">
                        <img src="/landing/images/twitter.png" alt="">
                        <img src="/landing/images/snapchat.png" alt="">
                        <img src="/landing/images/telegram.png" alt="">
                    </div>
                </div>
            </div>

            <p class="copy-right">
                حقوق النشر © 2022 منصة رؤى. كل الحقوق محفوظة
            </p>
        </div>
    </div>
    <!-- End Footer  -->









    <!-- Start js  -->
    <!-- Start Counter js  -->

    <script>
        let nums = document.querySelectorAll(".numbering .goal-number");
        let section = document.querySelector(".numbering-parent");
        let started = false; // Function Started ? No

        window.onscroll = function() {
            if (window.scrollY >= section.offsetTop) {
                if (!started) {
                    nums.forEach((num) => startCount(num));
                }
                started = true;
            }
        };

        function startCount(el) {
            let goal = el.dataset.goal;
            let count = setInterval(() => {
                el.textContent++;
                if (el.textContent == goal) {
                    clearInterval(count);
                }
            }, 1000 / goal);
        }
    </script>
    <!-- End Counter js  -->
    <!-- start toggle js  -->
    <script>
        let menutoggle = document.querySelector('.toggle');
        menutoggle.onclick = function() {
            menutoggle.classList.toggle('active')
        }
    </script>
    <!-- End toggle js  -->

    <!-- End js  -->
    <script src="/landing/js/jquery-3.6.0.min.js"></script>
    <script src="/landing/js/bootstrap.min.js"></script>
    <script src="/landing/js/owl.carousel.min.js"></script>
    @yield('scripts')
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false
                    }
                }
            })

        });
    </script>
</body>

</html>
