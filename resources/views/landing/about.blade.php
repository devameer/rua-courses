@extends('layout.landing')
@section('styles')

<link rel="stylesheet" href="/landing/css/Profile.css?ver{{rand(0 , 100)}}">
<link rel="stylesheet" href="/landing/css/style.css?ver{{rand(0 , 100)}}">
<link rel="stylesheet" href="/landing/css/About-us.css?ver{{rand(0 , 100)}}">
<link rel="stylesheet" href="/landing/css/rtl.css?ver{{rand(0 , 100)}}">
@endsection
@section('content')
  <!-- Start SubNav -->
  <div class="sub-nav-bar">
    <div class="container">
        <ul class="nav arabic-dir">
            <li class="nav-item">

                <a class="nav-link active" href="About-us.html">عن منصة رؤى</a>
            </li>
            <li class="nav-item home-and-owner">
                <a class="nav-link" href="{{route('home')}}"><img src="/landing/images/Home.png">الرئيسية</a>
                /
                <a class="nav-link" href="About-us.html">عن منصة رؤى</a>
            </li>

        </ul>
    </div>
</div>
<!-- End SubNav -->




<div class="profile-section about-us-page">
    <div class="container">
        <div class="profile-and-policy">

            <div class="larg-section-box profile-larg-box">
                <div class="profile-larg-box-img">
                    <p class="profile-data">
                        عن منصة رؤى
                    </p>
                </div>
                <div class="brief-about-us row arabic-dir">
                    <div class="brief-box col-lg-6">
                        <p class="brief-title">
                            نبذة
                        </p>
                        <p class="brief-text">
                            إنّ من الجميلِ أن يمنحَ الإنسانُ ما يَعدّه ثميناً للآخرين دونَ انتظارِ مقابل، إذ لا يوجدُ ما هو أغلى من الوقت والمال، فأن يهبُ الإنسان جُزءاً من وقته أو ماله أو جهده، فهو في عِداد المُتطوعيّن الساعين لخير المجتمعِ والإنسانيّة؛ حيثُ يُعدّ العمل التّطو
                            إنّ من الجميلِ أن يمنحَ الإنسانُ ما يَعدّه ثميناً للآخرين دونَ انتظارِ مقابل
                        </p>
                    </div>
                    <div class="brief-img col-lg-6">
                        <img src="/landing/images/about-us.png" alt="">
                    </div>
                </div>
                <div class="about-us-box text-algin-rtl">
                    <div class="about-us-content">
                        <p class="about-box-tilte">
                            كلمة الإدارة
                        </p>
                        <img src="/landing/images/directbox-notif.png" alt="">
                    </div>
                    <p class="explain-some-info-or-policies">
                        في بعض الوكالات في 90 تعميم نص يسمى "الترام الأصفر" أو "المترو الأصفر" معقولة استبدال أبجد هوز لإعطاء نظرة أكثر حداثة المحتوى. ولكن الكثير من الناس كانوا يبحثون لقراءة النص عندما كان في الفرنسية أو الإنجليزية، لم يتحقق التأثير المطلوب. العمل مع نص مقروء
                    </p>
                </div>
                <div class="brief-groub-boxs">
                    <div class="about-us-box text-algin-rtl">
                        <div class="about-us-content">
                            <p class="about-box-tilte">
                                رسالة المنصة
                            </p>
                            <img src="/landing/images/sms.png" alt="">
                        </div>
                        <p class="explain-some-info-or-policies">
                            في بعض الوكالات في 90 تعميم نص يسمى "الترام الأصفر" أو "المترو الأصفر" معقولة استبدال أبجد هوز لإعطاء نظرة أكثر حداثة المحتوى. ولكن الكثير من الناس كانوا يبحثون لقراءة النص عندما
                        </p>
                    </div>
                    <div class="about-us-box text-algin-rtl">
                        <div class="about-us-content">
                            <p class="about-box-tilte">
                                رؤية المنصة
                            </p>
                            <img src="/landing/images/Discovery.png" alt="">
                        </div>
                        <p class="explain-some-info-or-policies">
                            في بعض الوكالات في 90 تعميم نص يسمى "الترام الأصفر" أو "المترو الأصفر" معقولة استبدال أبجد هوز لإعطاء نظرة أكثر حداثة المحتوى. ولكن </p>
                    </div>

                </div>
                <div class="about-us-box text-algin-rtl">
                    <div class="about-us-content">
                        <p class="about-box-tilte">
                            أهداف المنصة
                        </p>
                        <img src="/landing/images/document.png" alt="">
                    </div>
                    <p class="explain-some-info-or-policies">
                        في بعض الوكالات في 90 تعميم نص يسمى "الترام الأصفر" أو "المترو الأصفر" معقولة استبدال أبجد هوز لإعطاء نظرة أكثر حداثة المحتوى. ولكن الكثير من الناس كانوا يبحثون لقراءة النص عندما كان في الفرنسية أو الإنجليزية، لم يتحقق التأثير المطلوب. العمل مع نص مقروء،
                        التي تحتوي على الاتجاهات يمكن أن يسبب التشتت وهذا يمكن أن يساعد على التركيز على التخطيط. .
                    </p>
                    <p class="explain-some-info-or-policies">
                        الاستفادة من أصل لاتيني والمحتوى هراء أبجد هوز يمنع القارئ من الهاء مضمون النص، وبالتالي يمكن أن تركز
                    </p>
                </div>
                <div class="about-us-box text-algin-rtl">
                    <div class="about-us-content">
                        <p class="about-box-tilte">
                            مميزات المنصة
                        </p>
                        <img src="/landing/images/discover.png" alt="">
                    </div>
                    <p class="explain-some-info-or-policies">
                        في بعض الوكالات في 90 تعميم نص يسمى "الترام الأصفر" أو "المترو الأصفر" معقولة استبدال أبجد هوز لإعطاء نظرة أكثر حداثة المحتوى. ولكن الكثير من الناس كانوا يبحثون لقراءة النص عندما كان في الفرنسية أو الإنجليزية، لم يتحقق التأثير المطلوب. العمل مع نص مقروء،
                        التي تحتوي على الاتجاهات يمكن أن يسبب التشتت وهذا يمكن أن يساعد على التركيز على التخطيط. .
                    </p>
                    <p class="about-us-explain2">
                        الاستفادة من أصل لاتيني والمحتوى هراء أبجد هوز يمنع القارئ من الهاء مضمون النص، وبالتالي يمكن أن تركز
                    </p>
                </div>
            </div>
            <div class="small-section-box profile-small-box">

                <ul class="move-list-links arabic-dir list-unstyled">
                    <a href="About-us.html" class="active-profile-subject">
                        <li>
                            <i class="fa-brands fa-bandcamp"></i> عن المنصة
                        </li>
                    </a>
                    <a href="Privacy-policies.html">
                        <li>
                            <i class="fa-solid fa-unlock"></i> سياسة الخصوصية
                        </li>
                    </a>
                    <a href="Policy-usage.html">
                        <li>
                            <i class="fa-light fa-file-lines"></i> سياسة الاستخدام
                        </li>
                    </a>
                    <a href="Terms.html" class="logout-link">
                        <li>
                            <i class="fa-light fa-file-lines"></i> الشروط و الأحكام
                        </li>
                    </a>

                </ul>
            </div>
        </div>

    </div>
</div>


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

@endsection
