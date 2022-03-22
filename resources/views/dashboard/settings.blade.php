@extends('layout.landing')
@section('styles')
<link rel="stylesheet" href="/landing/css/Profile.css">
<link rel="stylesheet" href="/landing/css/Settings.css">
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
                    <p class="settings-data">
                        الإعدادات
                    </p>
                </div>
                <div class="seetings-info-box text-algin-rtl">
                    <p class="email-settings-title">
                        البريد الإلكتروني
                    </p>
                    <p class="email-question">
                        كم مرة تريد تلقي رسائل البريد الإلكتروني؟
                    </p>



                    <div class="check-display">
                        <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label for="flexRadioDefault1">
                            .يوميًا - لا تفوت أي صفقة أبدًا! عروض منتقاة بعناية وعروض جديدة لمفضلاتك كل يوم
                        </label>
                    </div>
                    <div class="check-display">
                        <input type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label for="flexRadioDefault2">
                            .أبدًا - قم بإلغاء اشتراكي من جميع رسائل البريد الإلكتروني الترويجية
                        </label>
                    </div>
                </div>













                <div class="share-linke">
                    <a href="" class="share">حفظ</a>
                </div>

            </div>
            <div class="small-section-box profile-small-box">
                <div class="profile-img-info">
                    <img class="profile-img" src="images/profile.png" alt="user img">
                    <p class="edit-img">تحديث الصورة</p>
                    <p class="profile-name">محمد عبداللّه</p>
                </div>
                <ul class="move-list-links arabic-dir list-unstyled">
                    <a href="{{ route('dashboard.profile') }}">
                        <li class="active-profile-part">
                            <i class="fa-thin fa-user"></i> البيانات الشخصية
                        </li>
                    </a>
                    <a href="{{ route('dashboard.courses') }}">
                        <li>
                            <i class="fa-thin fa-circle-play"></i> الدورات
                        </li>
                    </a>
                    <a href="{{ route('dashboard.settings') }} class="active-profile-subject">
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
