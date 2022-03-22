@extends('layout.landing')
@section('styles')
    <link rel="stylesheet" href="/landing/css/Contact-us.css">
@endsection
@section('content')
    <!-- End Navbar -->
    <div class="sub-nav-bar">
        <div class="container">
            <ul class="nav arabic-dir">
                <li class="nav-item">

                    <a class="nav-link active" href="Contact-us.html">تواصل معنا</a>
                </li>
                <li class="nav-item home-and-owner">
                    <a class="nav-link" href="index.html"><img src="/landing/images/Home.png">الرئيسية</a>
                    /
                    <a class="nav-link" href="Contact-us.html">تواصل معنا</a>
                </li>

            </ul>
        </div>
    </div>
    <!-- End SubNav -->


    <div class="contact-us">
        <div class="container">
            <div class="contact-us-box row">
                <div class="img-and-content col-lg-7">
                    <img class="marketing-img" src="/landing/images/Marketing.png" alt="contact img">
                    <div class="contact-methods">


                        <div class="contact-type">
                            <span>الدوحة ، قطر</span>
                            <img src="/landing/images/Place.png" alt="">
                        </div>
                        <div class="contact-type">
                            <span>info@mail.com</span>
                            <img src="/landing/images/MobileSMS.png" alt="">
                        </div>
                        <div class="contact-type">
                            <span>+974 00 123 4567</span>
                            <img src="/landing/images/Mobile.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="contant-form col-lg-5 text-algin-rtl">
                    <p class="contact-main-title">
                        نسعد بتواصلكم معنا
                    </p>
                    <p class="contact-q">
                        لديك استفسارات؟ تواصل معنا لمساعدتك والرد على استفساراتك
                    </p>
                    <div class="contact-inputs">
                        <label for="userName">الاسم</label>
                        <input type="text" id="userName" placeholder="الاسم">
                    </div>
                    <div class="contact-inputs">
                        <label for="userEmail">الايميل</label>
                        <input type="email" id="userEmail" placeholder="example@mail.com">
                    </div>
                    <div class="contact-inputs">
                        <label for="message-text">نص الرسالة</label>
                        <textarea id="message-text" cols="5" rows="5" placeholder="نص الرسالة"></textarea>
                    </div>
                    <div class="send-message-link share-linke">
                        <a href="" class="share">إرسال</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
