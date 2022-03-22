@extends('layout.landing')

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

    <!-- Start Courses Sections -->
    <div class="courses-sections">

        <div class="container courses-sections-page">
            <p class="section-title">
                أقسام الدورات
            </p>
            <div class="course-row row">
                <div class="course-box ">
                    <a href="{{ route('courses.categories.show' , 2) }}">
                        <img src="/landing/images/3D.png" alt="3D">
                        <p class="course-name">
                            ثري دي
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a href="{{ route('courses.categories.show' , 2) }}">
                        <img src="/landing/images/motion-graphics.png" alt="Motion Graphics">
                        <p class="course-name">
                            مموشن جرافيك
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/montage.png" alt="Montage">
                        <p class="course-name">
                            مونتاج
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/design.png" alt="Desgin">
                        <p class="course-name">
                            تصميم جرافيك
                        </p>
                    </a>
                </div>
            </div>
            <div class="course-row row">
                <div class="course-box ">
                    <a href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/creative-content.png" alt="Creative content">
                        <p class="course-name">
                            المحتوى الابداعي
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/user-experience.png" alt="User Experience">
                        <p class="course-name">
                            تجربة المستخدم
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/graphics-desgin.png" alt="Graphics desgin">
                        <p class="course-name">
                            تصميم جرافيك
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a href="{{ route('courses.categories.show' , 2) }}">
                        <img src="/landing/images/photography.png" alt="Photography">
                        <p class="course-name">
                            التصوير
                        </p>
                    </a>

                </div>

            </div>
            <div class="see-more-box"><a href="Courses.html" class="see-more">عرض المزيد</a></div>
        </div>
    </div>
    <!-- End Courses Sections -->
@endsection
