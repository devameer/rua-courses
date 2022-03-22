@extends('layout.landing')
@section('styles')
<link rel="stylesheet" href="/landing/css/Book-Preview.css">

@endsection
@section('content')
   <!-- Start SubNav -->
   <div class="sub-nav-bar">
    <div class="container">
        <ul class="nav arabic-dir">
            <li class="nav-item">

                <a class="nav-link active" href="Courses.html">الكتب</a>
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

<!-- Start Best Books Section  -->
<div class="books-section">
    <div class="container">


        <div class="book-row book-grid">


            <div class="book-bar">
                <div class="book-box ">
                    <img src="/landing/images/book.png" alt="Book">

                </div>
                <div class="box-discreption text-algin-rtl">
                    <p class="book-name">
                        اسم الكتاب
                    </p>
                    <p class="book-info">
                        تفاصيل بسيطة عن الكتاب تضاف هنا
                    </p>

                </div>
                <div class="download-box">
                    <a href="#" class="download-link">
                        pdf تحميل الكتاب
                    <img src="/landing/images/donwload.png" alt="">
                    </a>
                </div>
                <div class="send-via-email-box">
                    <a href="#" class="send-via-email-link">
                        pdf تحميل الكتاب
                    <img src="/landing/images/sms.png" alt="">
                    </a>
                </div>
            </div>
            <div class="book-preview-box">
                <p class="section-title">
                    أفضل الكتب
                </p>
                <p class="data">
                    2022/01/01 <i class="fa-regular fa-calendar-days"></i>
                </p>
                <p class="books-text">
                    لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد نجت ليس فقط خمسة قرون ، ولكن
                    أيضًا القفزة في التنضيد الإلكتروني ، وظلت دون تغيير جوهري. تم نشره في الستينيات من القرن الماضي بإصدار أوراق ليتراسيت التي تحتوي على مقاطع Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل ألدوس بيج ميكربما في ذلك إصدارات لوريم
                    إيبسوم.
                </p>
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
<!-- End Best Books Section  -->

@endsection
