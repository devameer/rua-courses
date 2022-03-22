@extends('layout.landing')
<link rel="stylesheet" href="/landing/css/style.css">
<link rel="stylesheet" href="/landing/css/videos.css">
<link rel="stylesheet" href="/landing/css/video-player.css">
<link rel="stylesheet" href="/landing/css/video-player1-2.css">
<link rel="stylesheet" href="/landing/css/rtl.css">
@section('content')
    <!-- Start SubNav -->
    <div class="sub-nav-bar">
        <div class="container">
            <ul class="nav arabic-dir">
                <li class="nav-item">

                    <a class="nav-link active" href="Courses.html">الدورات</a>
                </li>
                <li class="nav-item home-and-owner">
                    <a class="nav-link" href="{{ route('home') }}"><img src="/landing/images/Home.png">الرئيسية</a>
                    /
                    <a class="nav-link" href="Courses.html">الدورات</a>
                </li>

            </ul>
        </div>
    </div>
    <!-- End SubNav -->

    <!-- Start Video Player Section  -->
    <div class="video-player-section">
        <div class="container">
            <div class="vid-player-cont-grid">
                <div class="video-player-row">
                    <div class="vid-player-small-col">
                        <div class="videos-titles-cornar">
                            <div class="coures-name-section">
                                <p class="coures-name">
                                    أساسيات في التصميم الجرافيكي
                                </p>
                                <span class="coures-count">
                                    الدروس({{ $course->lessons->count() }})
                                </span>
                                {{-- <span class="total-coures-time">
                                    26:04:37
                                </span> --}}
                            </div>

                            <ul class="videos-list list-unstyled">
                                {{-- <li class="active-coures-file">
                                    <span class="vid-time">
                                        <i class="fa-thin fa-download"></i>
                                    </span>
                                    <a href="">
                                        <span class="vid-disc">
                                            تحميل ملفات الدورة
                                        </span>
                                        <i class="fa-thin fa-file-lines"></i>
                                    </a>
                                </li> --}}
                                <li class="d-none"></li>
                                @foreach ($course->lessons as $key=> $lesson)
                                    <li>
                                        <span class="vid-time">55:00</span>
                                        <a   data-vid="{{ $lesson->video }}">
                                            <span class="vid-disc">
                                                {{ $lesson->title }}
                                            </span>
                                            <i class="fa-thin fa-circle-play"></i>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="vid-player-small-col">
                        @if ($course->teacher)


                        <div class="trainers-box">
                            <p class="trainers-title">
                                المدربين
                            </p>
                            <div class="trainers-info-and-img">
                                <div class="trainer-info">
                                    <p class="trainer-name">{{ $course->teacher->name }}</p>
                                    <p class="trainer-job">{{ $course->teacher->job_title }}</p>
                                </div>
                                <img src="{{ asset($course->teacher->image) }}" width="40px" alt="trainer img">

                            </div>
                        </div>
                        @endif
                        <div class="share-course-box">
                            <p class="share-course">
                                شارك
                            </p>
                            <a href="https://www.facebook.com/" class="facebook" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/" class="twitter" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="instagram" target="_blank">
                                <span class="insta">
                                    in
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="video-player-row">
                    <div class="vid-player-box">
                        @if (auth()->check())
                            @if($course->favorited())
                            <iframe src="https://www.youtube.com/embed/{{ $first_video }}" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                                {{-- <a href="{{route('unFavoriteCourse' , $course->id)}}">
                                    <i class="far fa-heart"></i>
                                    <span>إزالة من المفضلة</span>
                                </a> --}}

                            @else
                            <div class="blocked-access">
                                <div class="lock-vid">
                                    <img src="/landing/images/lock.png" alt="">
                                </div>
                                <p class="lock-title">
                                    لا يمكن عرض الفيديو
                                </p>
                                <p class="lock-explane">
                                    لا يمكن عرض الفيديو الخاص بهذه الدورة ، الرجاء الاشتراك أولا.
                                </p>
                                <div class="sign-now">
                                    <a href="{{route('favoriteCourse' , $course->id)}}">الإشتراك في الدورة</a>
                                </div>
                            </div>

                            @endif


                        @else
                            <div class="blocked-access">
                                <div class="lock-vid">
                                    <img src="images/lock.png" alt="">
                                </div>
                                <p class="lock-title">
                                    لا يمكن عرض الفيديو
                                </p>
                                <p class="lock-explane">
                                    لا يمكن عرض الفيديو الخاص بهذه الدورة ، الرجاء الاشتراك أولا.
                                </p>
                                <div class="sign-now">
                                    <a href="#">سجل الأن</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="vid-player-course-content arabic-dir">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true"><i class="fa-regular fa-circle-info"></i>معلومات الدورة </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                    aria-selected="false"><i class="fa-thin fa-file-lines"></i> المرفقات</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="course-information-box">
                                    <p class="course-info-title">
                                        معلومات الدورة
                                    </p>
                                    <p class="course-ifon-text">
                                        {!! $course->description !!}
                                    </p>
                                </div>
                                {{-- <div class="course-information-box">
                                    <p class="course-info-title">
                                        الشهادة
                                    </p>
                                    <p class="course-ifon-text">
                                        شهادة إتمام دورة من منصة رؤى
                                    </p>
                                </div>
                                <div class="course-information-box">
                                    <p class="course-info-title">
                                        الشهادة<span>7</span>
                                    </p>

                                </div> --}}
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="course-information-box">
                                    <p class="course-info-title">
                                        الملفات
                                    </p>
                                    @foreach ($course->attachments as $attachment)
                                        <div class="download-container">
                                            <div class="download-info">
                                                <p class="down-explanation">
                                                    {{ $attachment->title }}
                                                </p>
                                                <p class="prog-info">
                                                    ملف exe
                                                </p>
                                                <p class="prog-info">
                                                    500.0 MB
                                                </p>
                                            </div>
                                            <div class="download-box">
                                                <a href="{{ asset($attachment->file) }}" download class="download-link">
                                                    تحميل
                                                    <img src="/landing/images/donwload.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Video Player Section  -->
@endsection
