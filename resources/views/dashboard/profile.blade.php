@extends('layout.landing')
@section('styles')
    <link rel="stylesheet" href="/landing/css/Profile.css">
@endsection
@section('content')
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
                <div class="profile-larg-box-img">
                    <p class="profile-data">
                        البيانات الشخصية
                    </p>
                    <div class="profile-img-info center-profile-img-box">
                        <img class="profile-img" src="/landing/images/profile.png" alt="user img">
                        <p class="edit-img center-img">تحديث الصورة<img src="/landing/images/edit-pic.png" alt=""></p>
                    </div>
                </div>
                <div class="profile-forms">
                    <div class="profile-inputs">
                        <label for="userName">اسم المستخدم</label>
                        <input type="text" id="userName" class="input-style form-control" placeholder="اسم المستخدم">
                    </div>
                    <div class="profile-inputs">
                        <label for="userEmail">الايميل</label>
                        <input type="email" id="userEmail" class="input-style form-control" placeholder="example@mail.com">
                    </div>
                    <div class="profile-inputs">
                        <label for="dataOfBirth">تاريخ الميلاد</label>
                        <input type="text" id="dataOfBirth" class="input-style form-control" placeholder="0000/00/00">
                    </div>
                    <div class="profile-inputs">
                        <label for="userTel">رقم الجوال</label>
                        <div class="phone-flag">
                            <div class="flag-img">
                                966+
                                <img src="/landing/images/flag.png" alt="">
                            </div>
                            <input type="tel" id="userTel" placeholder="000 0000 0000" class="input-style form-control">
                        </div>
                    </div>

                </div>
                <div class="gender-box">
                    <p class="gender-determine">
                        نوع الجنس
                    </p>
                    <button class="femal-gender">الأنثى <i class="fa-solid fa-venus"></i></button>
                    <button class="mail-gender">الذكر <i class="fa-solid fa-mars"></i></button>
                </div>
                <div class="share-linke">
                    <a href="" class="share">تحديث</a>
                </div>

            </div>
            <div class="small-section-box profile-small-box">
                <div class="profile-img-info">
                    <img class="profile-img" src="/landing/images/profile.png" alt="user img">
                    <p class="edit-img">تحديث الصورة</p>
                    <p class="profile-name">محمد عبداللّه</p>
                </div>
                <ul class="move-list-links arabic-dir list-unstyled">
                    <a href="{{ route('dashboard.profile') }}" class="active-profile-subject">
                        <li>
                            <i class="fa-thin fa-user"></i> البيانات الشخصية
                        </li>
                    </a>
                    <a href="{{ route('dashboard.courses') }}">
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
