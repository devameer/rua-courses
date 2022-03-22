@extends('layout.landing')
@section('styles')
<link rel="stylesheet" href="/landing/css/style.css">
<link rel="stylesheet" href="/landing/css/Profile.css">
<link rel="stylesheet" href="/landing/css/videos.css">
<link rel="stylesheet" href="/landing/css/Courses-saved.css">
<link rel="stylesheet" href="/landing/css/rtl.css">

@endsection
@section('content')
    <!-- Start SubNav -->
    <div class="profile-section">
        <div class="container">
            <div class="profile-main-title-box">
                <p class="profile-title">
                    الملف الشخصي
                </p>
                <p class="profile-hello">
                    أهلاً و سهلاً في ملفك الخاص
                </p>
            </div>
            <div class="profile-and-policy">
                <div class="larg-section-box profile-larg-box">
                    <div class="section-name-and-menu">
                        <p class="section-title">
                            الدورات
                        </p>
                    </div>
                    <div class="videos-container">
                        <div class="card">
                            <a href="video-player1-2.html">
                                <img class="card-img-top" src="/landing/images/UI-UX-From-Scratch.png">
                                <img class="second-card-img-top" src="/landing/images/ux-ui-design.png">
                                <div class="card-body ">
                                    <h5 class="card-title ">Adobe photoshop | أدوبي فوتوشوب</h5>
                                    <p class="card-text ">عبد الله الجابري</p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="video-player1-2.html">
                                <img class="card-img-top" src="/landing/images/UI-UX-From-Scratch.png">
                                <img class="second-card-img-top" src="/landing/images/ux-ui-design.png">
                                <div class="card-body ">
                                    <h5 class="card-title ">Adobe photoshop | أدوبي فوتوشوب</h5>
                                    <p class="card-text ">عبد الله الجابري</p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="video-player1-2.html">
                                <img class="card-img-top" src="/landing/images/UI-UX-From-Scratch.png">
                                <img class="second-card-img-top" src="/landing/images/ux-ui-design.png">
                                <div class="card-body ">
                                    <h5 class="card-title ">Adobe photoshop | أدوبي فوتوشوب</h5>
                                    <p class="card-text ">عبد الله الجابري</p>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="video-player1-2.html">
                                <img class="card-img-top" src="/landing/images/UI-UX-From-Scratch.png">
                                <img class="second-card-img-top" src="/landing/images/ux-ui-design.png">
                                <div class="card-body ">
                                    <h5 class="card-title ">Adobe photoshop | أدوبي فوتوشوب</h5>
                                    <p class="card-text ">عبد الله الجابري</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="small-section-box profile-small-box">
                    <div class="profile-img-info">
                        <img class="profile-img" src="/landing/images/profile.png" alt="user img">
                        <p class="edit-img">تحديث الصورة</p>
                        <p class="profile-name">محمد عبداللّه</p>
                    </div>
                    <ul class="move-list-links arabic-dir list-unstyled">
                        <a href="{{ route('dashboard.profile') }}">
                            <li class="active-profile-part">
                                <i class="fa-thin fa-user"></i> البيانات الشخصية
                            </li>
                        </a>
                        <a href="{{ route('dashboard.courses') }}" class="active-profile-subject">
                            <li>
                                <i class="fa-thin fa-circle-play"></i> الدورات
                            </li>
                        </a>
                        <a href="{{ route('dashboard.settings') }}">
                            <li>
                                <i class="fa-light fa-gear"></i> الاعدادات
                            </li>
                        </a>
                        <div class="logout-box">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <li>
                                    <i class="fa-solid fa-right-from-bracket"></i> تسجيل الخروج
                                </li>
                            </a>
                        </div>

                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
