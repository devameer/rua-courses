@extends('layout.landing')
@section('content')
    <!-- Start Main interface -->
    <div class="main-inteface">
        <div class="animation-svg">
            <img src="/landing/images/animation.png" alt="">
        </div>
        <div class="container">
            <div class="interface-row row">
                <div class="interface-colmun col-lg-6"></div>
                <div class="interface-colmun col-lg-6 text-algin-rtl selfend">
                    <p class="main-title">في بعض الوكالات في معقولة استبدال <br>أبجد هوز لإعطاء نظرة أكثر </p>
                    <p class="explane-title">في بعض الوكالات في 90 تعميم نص يسمى "الترام الأصفر" أو<br> "المترو الأصفر" معقولة استبدال أبجد هوز لإعطاء نظرة أكثر </p>
                    <div class="share-linke">
                        <a href="" class="share">اشتراك</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main interface -->

    <!-- Start Courses Sections -->
    <div class="courses-sections">

        <div class="container">
            <p class="section-title">
                أقسام الدورات
            </p>
            <div class="course-row row">
                @foreach ($categories as $category)
                @include('cards.CategoryCard' , ['category' => $category])
                @endforeach


            </div>
            <div class="see-more-box"><a href="{{ route('courses.categories') }}" class="see-more">عرض المزيد</a></div>
        </div>
    </div>
    <!-- End Courses Sections -->





    <!-- Start Best Books Section  -->
    <div class="books-section">
        <div class="container">
            <p class="section-title">
                أفضل الكتب
            </p>
            <div class="book-row owl-carousel owl-theme row">
                @foreach ($books as $book)
                @include('cards.BookCard' , ['book' => $book])
                @endforeach

            </div>


            <div class="see-more-box"><a href="{{ route('books') }}" class="see-more">عرض المزيد</a></div>
        </div>
    </div>
    <!-- End Best Books Section  -->

    <!-- Start Numbers Section  -->
    <div class="number-section">
        <div class="container">
            <div class="number-section-bg">
            </div>
            <div class="numbers-info row" dir="rtl">
                <div class="number-text col-md-4">
                    <p class="number-talk">الارقام تخبرك عنا<br> بشكل أكبر</p>
                </div>
                <div class="number-dir col-md-8 row numbering-parent" dir="ltr">
                    <div class="numbering col-3 ">
                        <span class="goal-number" data-goal="720"></span>
                        <span class="number-owner">ملفات</span>
                    </div>
                    <div class="numbering col-3  ">
                        <span class="goal-number" data-goal="720"></span>
                        <span class="number-owner">كتب</span>
                    </div>
                    <div class="numbering col-3 ">
                        <span class="goal-number" data-goal="2000"></span>
                        <span class="number-owner">دورات تعليمية</span>
                    </div>
                    <div class="numbering col-3  ">
                        <span class="goal-number" data-goal="350"></span>
                        <span class="number-owner">مشترك</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Numbers Section  -->
    <!-- Start File Section  -->
    <div class="files-section">
        <div class="container">
            <p class="section-title">
                أخر الملفات </p>

            <div class="file-row owl-carousel owl-theme row">
                @foreach ($files as $file)
                @include('cards.FileCard' , ['file' => $file])
                @endforeach

          
            </div>
            <div class="see-more-box"><a href="Files.html" class="see-more">عرض المزيد</a></div>
        </div>
    </div>
    <!-- End Files Section  -->

    <!-- Start Home Page Video Section -->

    <div class="home-video">
        <div class="container">
            <div class="video-row row">
                <div class="video-col col-xl-6">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/POMy7NQm5SA" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                </div>
                <div class="video-col col-xl-6 text-algin-rtl selfend">
                    <p class="main-title">
                        في بعض الوكالات في معقولة استبدال<br> أبجد هوز لإعطاء نظرة أكثر </p>


                    <p class="explane-title">
                        في بعض الوكالات في 90 تعميم نص يسمى "الترام الأصفر" أو <br>"المترو الأصفر" معقولة استبدال أبجد هوز لإعطاء نظرة أكثر
                    </p>
                    <div class="share-linke">
                        <a href="" class="share">اشتراك</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home Page Video  Section-->
    <!-- Start Ads Section  -->
    <div class="share-slid">
        <div class="container">
            <div class="share-bg"></div>
            <div class="share-ifo row arabic-dir">
                <div class="share-img col-md-6">
                    <img src="/landing/images/adspic-book.png" alt="">
                </div>
                <div class="share-text col-md-6">
                    <p class="main-title">
                        بانتظارك العديد من المصارد المتنوعة من دورات<br> عليمة وكتب وغيرها من الملفات
                    </p>
                    <div class="share-linke">
                        <a href="" class="share">اشتراك</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Ads Section  -->
@endsection
