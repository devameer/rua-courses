@extends('layout.auth')
@section('styles')
@endsection
@section('content')
    <div class="sing-up-form account-sing-form col-lg-6">
        <div class="img-account-type-page">
            <img src="/landing/images/Logo.png" alt="">
            <p class="type-sing-page">
                تسجيل الدخول
            </p>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="contact-inputs">
                <label for="userName">البريد الإلكتروني </label>
                <input id="email" type="email" placeholder="ample@gmail.com" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="contact-inputs pas-edit">
                <label for="password">كلمة المرور</label>
                <input  placeholder="........." id="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="forget-password-box">
                <a href="Forget-password.html">نسيت كلمة الرور؟</a>
            </div>
            <div class="login-link send-message-link share-linke margin-fit-link">
                <button class="share btn">تسجيل الدخول</butt>
            </div>
            <div class="creat-account-link send-message-link share-linke">
                <a href="Sign-up.html" class="share">إنشاء حساب</a>
            </div>
        </form>

    </div>
@endsection
