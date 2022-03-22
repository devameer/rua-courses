@extends('layout.landing')
@section('styles')
    <link rel="stylesheet" href="/landing/css/videos.css">
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
                    <a class="nav-link" href="index.html"><img src="/landing/images/Home.png">الرئيسية</a>
                    /
                    <a class="nav-link" href="Courses.html">الدورات</a>
                </li>

            </ul>
        </div>
    </div>
    <!-- End SubNav -->
    <!-- Start Video Page Section  -->

    <div class="video-page">

        <div class="container">
            <div class="section-name-and-menu">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        كل التخصصات
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <p class="section-title">
                    الدورات
                </p>
            </div>


            <div class="videos-container">

                @foreach ($category->courses as $course)
                @include('cards.CourseCard' , ['course' => $course])
                @endforeach


            </div>

            {{-- <div class="see-more-box "><a href="# " class="see-more ">عرض المزيد</a></div> --}}
        </div>
    </div>
    <!-- End Video Page Section  -->
@endsection
