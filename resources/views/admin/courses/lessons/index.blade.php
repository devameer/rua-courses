<x-base-layout>

    <!--begin::Row-->



        <!--begin::Tables Widget 11-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">المرفقات</span>

                    <span class="text-muted mt-1 fw-bold fs-7">جميع المرفقات في الموقع</span>
                </h3>
                <div class="card-toolbar">
                    <a href="{{ route('admin.courses.lessons.create', $course) }}" class="btn btn-sm btn-light-primary">
                        {!! theme()->getSvgIcon("icons/duotone/Communication/Add-user.svg", "svg-icon-2") !!}
                       إضافة مرفق جديد
                    </a>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 min-w-325px rounded-start">المرفق</th>
                                <th class="min-w-125px">تاريخ الإضافة</th>
                                <th class="min-w-200px text-end rounded-end"></th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach($course->lessons as $lesson)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <img src="{{ asset($lesson->image) }}" class="" alt=""/>
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $lesson->title }}</a>
                                                {{-- <span class="text-muted fw-bold text-muted d-block fs-7">{{ $row['product']['specs'] }}</span> --}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ date('M d, Y' , strtotime($lesson->created_at)) }}</a>
                                        {{-- <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span> --}}
                                    </td>
                                    <td class="text-end">
                                        {{-- <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            {!! theme()->getSvgIcon("icons/duotone/General/Settings-1.svg", "svg-icon-3") !!}
                                        </a> --}}

                                        <a href="{{ route('admin.courses.lessons.edit',['course' => $course , 'lesson'=> $lesson ] ) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            {!! theme()->getSvgIcon("icons/duotone/Communication/Write.svg", "svg-icon-3") !!}
                                        </a>

                                        <a href="{{ route('admin.courses.lessons.delete', ['course' => $course , 'lesson'=> $lesson ]) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            {!! theme()->getSvgIcon("icons/duotone/General/Trash.svg", "svg-icon-3") !!}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 11-->
    <!--end::Row-->


</x-base-layout>
