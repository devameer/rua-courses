@extends('layout.auth')
@section('styles')
@endsection
@section('content')
    <div class="sing-up-form account-sing-form col-lg-6">
        <div class="img-account-type-page">
            <img src="/landing/images/Logo.png" alt="">
            <p class="type-sing-page">
                إنشاء حساب
            </p>
        </div>
        <div class="contact-inputs">
            <label for="userName">الاسم كامل</label>
            <input type="text" id="userName" placeholder="الاسم">
        </div>
        <div class="contact-inputs">
            <label for="userEmail">الايميل</label>
            <input type="email" id="userEmail" placeholder="example@mail.com">
        </div>
        <div class="contact-inputs">
            <label for="phoneNumber">رقم الهاتف</label>
            <input type="tel" id="phoneNumber" placeholder="000 0000 0000">
        </div>
        <div class="mb-3 arabic-dir">
            <label for="selectCountry" class="form-label">الدولة</label>
            <select id="selectCountry" class="sign-select" aria-placeholder="dfdf">
                <option>يرجى اختيار الدولة</option>
                <option>الكويت</option>
                <option>قطر</option>
                <option>السعودية</option>
            </select>
        </div>
        <div class="mb-3 arabic-dir">
            <label for="selectCountry" class="form-label">الجنسية</label>
            <select id="selectCountry" class="sign-select">
                <option>يرجى اختيار الجنسية</option>
                <option>الكويت</option>
                <option>قطر</option>
                <option>السعودية</option>
            </select>
        </div>
        <div class="contact-inputs pas-edit">
            <label for="accountPasswordField">كلمة المرور</label>
            <input type="password" id="accountPasswordField" placeholder=".........">
        </div>
        <div class="check-terms arabic-dir">
            <input class="form-check-input" type="checkbox" value="" id="checkTerms">
            <label class="form-check-label" for="checkTerms">
                من خلال تسجيلك فإنك تؤكد أنك توافق على
                <a href="Terms.html">
                    الشروط
                    والأحكام و سياسة الخصوصي

                </a>
            </label>
        </div>




        <div class="creat-account-link send-message-link share-linke margin-fit-link">
            <a href="" class="share">إنشاء حساب</a>
        </div>
        <div class="login-link send-message-link share-linke">
            <a href="Login.html" class="share">تسجيل الدخول</a>
        </div>
    </div>
@endsection
