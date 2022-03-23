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
        <form dir="rtl" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="contact-inputs">
                        <label for="first_name">الاسم الأول</label>
                        <input type="text" id="first_name" class="@error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus laceholder="الاسم">
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="contact-inputs">
                        <label for="last_name">الاسم الأخير</label>
                        <input type="text" id="last_name" class="@error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus laceholder="الاسم">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="contact-inputs">
                <label for="email">الايميل</label>
                <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" placeholder="example@mail.com" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
             <div class="contact-inputs">
            <label for="phoneNumber">رقم الهاتف</label>
            <input type="tel" id="phoneNumber" placeholder="000 0000 0000">
        </div>
        @include('cards.countriesInput')
       {{--
        <div class="mb-3 arabic-dir">
            <label for="selectCountry" class="form-label">الجنسية</label>
            <select id="selectCountry" class="sign-select">
                <option>يرجى اختيار الجنسية</option>
                <option>الكويت</option>
                <option>قطر</option>
                <option>السعودية</option>
            </select>
        </div> --}}
            <div class="contact-inputs pas-edit">
                <label for="password">كلمة المرور</label>
                <input type="password" id="password" id="password" name="password" class="@error('password') is-invalid @enderror" placeholder="........." required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="contact-inputs pas-edit">
                <label for="password-confirm">تأكيد كلمة المرور</label>
                <input type="password" id="password-confirm" id="password-confirm" name="password_confirmation" placeholder="........." required autocomplete="new-password">

            </div>
            <div class="check-terms arabic-dir">
                <input class="form-check-input" type="checkbox" value="" id="checkTerms">
                <label class="form-check-label" for="checkTerms">
                    من خلال تسجيلك فإنك تؤكد أنك توافق على
                    <a>
                        الشروط
                        والأحكام و سياسة الخصوصي

                    </a>
                </label>
            </div>




            <div class="creat-account-link send-message-link share-linke margin-fit-link">
                <button class="share btn">إنشاء حساب</button>
            </div>
            <div class="login-link send-message-link share-linke">
                <a href="{{ route('login') }}" class="share">تسجيل الدخول</a>
            </div>
        </form>
    </div>
@endsection
