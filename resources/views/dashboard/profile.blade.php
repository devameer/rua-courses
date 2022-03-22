@php
$user = Auth::user();
@endphp
@extends('layout.landing')
@section('styles')
    <link rel="stylesheet" href="/landing/css/Profile.css">

    <link rel="stylesheet" href="/landing/css/style.css">
    <link rel="stylesheet" href="/landing/css/rtl.css">
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
                    <form method="POST" action="{{ route('user.settings') }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="profile-larg-box-img">
                            <p class="profile-data">
                                البيانات الشخصية
                            </p>
                            <div class="profile-img-info center-profile-img-box">
                                <Label>
                                    <img  id="output" class="profile-img" src="{{ asset($user->image ?? 'landing/images/profile.png') }}" alt="user img">
                                    <p class="edit-img center-img">تحديث الصورة<img src="/landing/images/edit-pic.png" alt=""></p>
                                    <input type="file" accept="image/*" id="inputImage" name="image" onchange="loadFile(event)" class="d-none">
                                </Label>



                            </div>
                        </div>
                        <div class="profile-forms">

                            <div class="profile-inputs">
                                <label for="first_name">الإسم الأول</label>
                            <input type="text" id="first_name" value="{{ $user->first_name }}" name="first_name" class="input-style form-control" placeholder="اسم المستخدم">
                            </div>


                            <div class="profile-inputs">
                                <label for="last_name">الإسم الأخير</label>
                                <input type="text" id="last_name" value="{{ $user->last_name }}" name="last_name" class="input-style form-control" placeholder="اسم المستخدم">
                            </div>


                            <div class="profile-inputs">
                                <label for="userEmail">الايميل</label>
                                <input type="email" id="userEmail" value="{{ $user->email }}" name="email" class="input-style form-control" placeholder="example@mail.com">
                            </div>
                            <div class="profile-inputs">
                                <label for="dataOfBirth">تاريخ الميلاد</label>
                                <input type="date" id="dataOfBirth" value="{{ $user->birth_date }}" name="birth_date" class="input-style form-control" placeholder="0000/00/00">
                            </div>
                            <div class="profile-inputs">
                                <label for="userTel">رقم الجوال</label>
                                <div class="phone-flag">
                                    <div class="flag-img">
                                        966+
                                        <img src="/landing/images/flag.png" alt="">
                                    </div>
                                    <input type="tel" id="userTel" value="{{ $user->phone }}" name="phone" placeholder="000 0000 0000" class="input-style form-control">
                                </div>
                            </div>

                        </div>
                        <div class="gender-box">
                            <p class="gender-determine">
                                نوع الجنس
                            </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" {{ $user->gender == 1 ? 'checked' : null }} name="gender" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1"><i class="fa-solid fa-venus"></i> الذكر</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" {{ $user->gender == 2 ? 'checked' : null }} name="gender" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2"> <i class="fa-solid fa-mars"></i> الأنثى</label>
                            </div>

                        </div>
                        <div class="share-linke">
                            <button class="share btn">تحديث</button>
                        </div>
                    </form>
                </div>
                <div class="small-section-box profile-small-box">
                    <div class="profile-img-info">
                        <img class="profile-img" src="/landing/images/profile.png" alt="user img">
                        {{-- <p class="edit-img">تحديث الصورة</p> --}}
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
@section('scripts')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
