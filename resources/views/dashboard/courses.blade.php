@extends('layout.landing')
@section('styles')
    <link rel="stylesheet" href="/landing/css/style.css?ver{{rand(0 , 100)}}">
    <link rel="stylesheet" href="/landing/css/Profile.css?ver{{rand(0 , 100)}}">
    <link rel="stylesheet" href="/landing/css/videos.css?ver{{rand(0 , 100)}}">
    <link rel="stylesheet" href="/landing/css/Courses-saved.css?ver{{rand(0 , 100)}}">
    <link rel="stylesheet" href="/landing/css/rtl.css?ver{{rand(0 , 100)}}">
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
                        @foreach (Auth::user()->favorites as $course)
                            @include('cards.CourseCard', ['course' => $course])
                        @endforeach

                    </div>
                </div>
                <div class="small-section-box profile-small-box">
                    <div class="profile-img-info">
                        <img class="profile-img" src="/landing/images/profile.png" alt="user img">
                        {{-- <p class="edit-img">تحديث الصورة</p> --}}
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
