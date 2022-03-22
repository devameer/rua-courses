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
                <div class="course-box ">
                    <a  href="{{ route('courses.categories.show' , 2) }}">
                        <img src="/landing/images/3D.png" alt="3D">
                        <p class="course-name">
                            ثري دي
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a  href="{{ route('courses.categories.show' , 2) }}">
                        <img src="/landing/images/motion-graphics.png" alt="Motion Graphics">
                        <p class="course-name">
                            مموشن جرافيك
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a  href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/montage.png" alt="Montage">
                        <p class="course-name">
                            مونتاج
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a  href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/design.png" alt="Desgin">
                        <p class="course-name">
                            تصميم جرافيك
                        </p>
                    </a>
                </div>
            </div>
            <div class="course-row row">
                <div class="course-box ">
                    <a  href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/creative-content.png" alt="Creative content">
                        <p class="course-name">
                            المحتوى الابداعي
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a  href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/user-experience.png" alt="User Experience">
                        <p class="course-name">
                            تجربة المستخدم
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a  href="{{ route('courses.categories.show' , 2) }}">

                        <img src="/landing/images/graphics-desgin.png" alt="Graphics desgin">
                        <p class="course-name">
                            تصميم جرافيك
                        </p>
                    </a>
                </div>
                <div class="course-box ">
                    <a  href="{{ route('courses.categories.show' , 2) }}">
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





    <!-- Start Best Books Section  -->
    <div class="books-section">
        <div class="container">
            <p class="section-title">
                أفضل الكتب
            </p>
            <div class="book-row owl-carousel owl-theme row">
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            1اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            2اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            3اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            4اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            5اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            6اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            7اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            8اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            9اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            10اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            اسم الكتاب11
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>
                <div class="book-bar">
                    <a  href="{{ route('books.show' , 2) }}" class="test">
                        <div class="book-box ">
                            <img src="/landing/images/book.png" alt="Book">
                        </div>
                    </a>
                    <div class="box-discreption text-algin-rtl">
                        <p class="book-name">
                            12اسم الكتاب
                        </p>
                        <p class="book-info">
                            تفاصيل بسيطة عن الكتاب تضاف هنا
                        </p>
                        <p class="data">
                            2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                        </p>
                    </div>
                </div>

            </div>


            <div class="see-more-box"><a href="Books.html" class="see-more">عرض المزيد</a></div>
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
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                1اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                2اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                3اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                4اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                5اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                6اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                7اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                8اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                9اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                10اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book">
                        <div class="box-discreption">
                            <p class="file-name">
                                11اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-bar">
                    <div class="file-box">
                        <img src="/landing/images/documents.png" alt="Book" style="max-width: 100%;">
                        <div class="box-discreption">
                            <p class="file-name">
                                12اسم الملف </p>
                            <p class="book-info">
                                وصف الملف يضاف هنا </p>
                            <div class="download-box">
                                <a href="#" class="download-link">
                                    تحميل
                                    <img src="/landing/images/donwload.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
