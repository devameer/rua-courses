@extends('layout.landing')
@section('styles')
<link rel="stylesheet" href="/landing/css/style.css">
<link rel="stylesheet" href="/landing/css/rtl.css">
@endsection
@section('content')
    <!-- Start SubNav -->
    <div class="sub-nav-bar">
        <div class="container">
            <ul class="nav arabic-dir">
                <li class="nav-item">

                    <a class="nav-link active" href="Courses.html">الدورات</a>
                </li>
                <li class="nav-item home-and-owner">
                    <a class="nav-link" href="{{route('home')}}"><img src="/landing/images/Home.png">الرئيسية</a>
                    /
                    <a class="nav-link" href="Courses.html">الدورات</a>
                </li>

            </ul>
        </div>
    </div>
    <!-- End SubNav -->

    <!-- Start Courses Sections -->
    <div class="courses-sections">

        <div class="container courses-sections-page">
            <p class="section-title">
                أقسام الدورات
            </p>
            <div class="course-row row">
                @foreach ($categories as $category)
                @include('cards.CategoryCard' , ['category' => $category])
                @endforeach

            </div>

        </div>
    </div>
    <!-- End Courses Sections -->
@endsection
