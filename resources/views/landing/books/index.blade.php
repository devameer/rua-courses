@extends('layout.landing')
@section('styles')
<link rel="stylesheet" href="/landing/css/style.css">
<link rel="stylesheet" href="/landing/css/rtl.css">
<link rel="stylesheet" href="/landing/css/Books.css">
@endsection
@section('content')
  <!-- End Navbar -->
  <div class="sub-nav-bar">
    <div class="container">
        <ul class="nav arabic-dir">
            <li class="nav-item">

                <a class="nav-link active" href="Courses.html">الكتب</a>
            </li>
            <li class="nav-item home-and-owner">
                <a class="nav-link" href="{{route('home')}}"><img src="/landing/images/Home.png">الرئيسية</a>
                /
                <a class="nav-link" href="Books.html">الكتب</a>
            </li>

        </ul>
    </div>
</div>
<!-- End SubNav -->

<!-- Start Best Books Section  -->
<div class="books-section">
    <div class="container">
        <p class="section-title">
            أفضل الكتب
        </p>
        <p class="books-text">
            لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد نجت ليس فقط خمسة قرون
        </p>
        <div class="book-row row">
            <div class="book-bar">
                <a href="Book-Preview.html" class="test">
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
                <a href="Book-Preview.html" class="test">
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
                <a href="Book-Preview.html" class="test">
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
                <a href="Book-Preview.html" class="test">
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
        </div>
        <div class="book-row row">
            <div class="book-bar">
                <a href="Book-Preview.html" class="test">
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
                <a href="Book-Preview.html" class="test">
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
                <a href="Book-Preview.html" class="test">
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
                <a href="Book-Preview.html" class="test">
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
        </div>

        <div class="book-row row">
            <div class="book-bar">
                <a href="Book-Preview.html" class="test">
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
                <a href="Book-Preview.html" class="test">
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
                <a href="Book-Preview.html" class="test">
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
                <a href="Book-Preview.html" class="test">
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
        <div class="see-more-box"><a href="#" class="see-more">عرض المزيد</a></div>

    </div>
</div>
</div>
<!-- End Best Books Section  -
@endsection
