@extends('layout.landing')
@section('styles')
<link rel="stylesheet" href="/landing/css/style.css">
<link rel="stylesheet" href="/landing/css/rtl.css">
<link rel="stylesheet" href="/landing/css/Books.css">
@endsection
@section('content')
    <!-- Start SubNav -->
    <div class="sub-nav-bar">
        <div class="container">
            <ul class="nav arabic-dir">
                <li class="nav-item">

                    <a class="nav-link active" href="Files.html">الملفات</a>
                </li>
                <li class="nav-item home-and-owner">
                    <a class="nav-link" href="{{route('home')}}"><img src="/landing/images/Home.png">الرئيسية</a>
                    /
                    <a class="nav-link" href="Files.html">الملفات</a>
                </li>

            </ul>
        </div>
    </div>
    <!-- End SubNav -->




    <!-- Start File Section  -->
    <div class="files-section">
        <div class="container">
            <p class="section-title">
                أخر الملفات </p>

            <p class="files-text">
                لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد نجت ليس فقط خمسة قرون
            </p>
            <div class="file-row row">
                @foreach ($files as $file)
                @include('cards.FileCard' , ['file' => $file])
                @endforeach
             

            </div>

        </div>

    </div>
    <!-- End Files Section  -->
@endsection
