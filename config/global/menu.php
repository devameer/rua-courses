<?php

return array(

    // Main menu
    'main'          => array(
        //// Dashboard
        array(
            'title' => 'الرئيسية',
            'path'  => 'admin',
            'icon'  => theme()->getSvgIcon("demo1/media/icons/duotone/Design/PenAndRuller.svg", "svg-icon-2"),
        ),

        //// Modules
        array(
            'classes' => array('content' => 'pt-4 pb-2'),
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">الدورات</span>',
        ),

        // Account
        array(
            'title'      => 'الدورات',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotone/General/User.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'  => 'جميع الدورات',
                        'path'   => 'admin/courses',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إضافة جديد',
                        'path'   => 'admin/courses/create',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                ),
            ),
        ),
        array(
            'title'      => 'المعلمين',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotone/General/User.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'  => 'جميع المعلمين',
                        'path'   => 'admin/teachers',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إضافة جديد',
                        'path'   => 'admin/teachers/create',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                ),
            ),
        ),
        array(
            'title'      => ' تصنيفات الدورات',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotone/General/User.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'  => 'جميع تصنيفات الدورات',
                        'path'   => 'admin/courses/categories',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إضافة جديد',
                        'path'   => 'admin/courses/categories/create',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                ),
            ),
        ),
        array(
            'content' => '<div class="separator mx-1 my-1"></div>',
        ),
        array(
            'classes' => array('content' => 'pt-4 pb-2'),
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">المكتبة</span>',
        ),
        array(
            'title'      => 'الكتب',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotone/General/User.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'  => 'جميع الكتب',
                        'path'   => 'admin/books',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إضافة جديد',
                        'path'   => 'admin/books/create',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                ),
            ),
        ),
        array(
            'title'      => 'الملفات',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotone/General/User.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title'  => 'جميع الملفات',
                        'path'   => 'admin/files',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'إضافة جديد',
                        'path'   => 'admin/files/create',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),

                ),
            ),
        ),
       


    ),


);
