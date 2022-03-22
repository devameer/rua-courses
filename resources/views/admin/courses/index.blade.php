<x-base-layout>

    <!--begin::Row-->



        <!--begin::Tables Widget 11-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">الدورات</span>

                    <span class="text-muted mt-1 fw-bold fs-7">جميع الدورات في الموقع</span>
                </h3>
                <div class="card-toolbar">
                    <a href="{{ route('admin.courses.create') }}" class="btn btn-sm btn-light-primary">
                        {!! theme()->getSvgIcon("icons/duotone/Communication/Add-user.svg", "svg-icon-2") !!}
                       إضافة دورة جديدة
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
                                <th class="ps-4 min-w-325px rounded-start">الدورة</th>
                                <th class="min-w-125px">المرفقات</th>
                                <th class="min-w-125px">الدروس </th>

                                <th class="min-w-125px">تاريخ الإضافة</th>
                                <th class="min-w-200px text-end rounded-end"></th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <img src="{{ asset($course->image) }}" class="" alt=""/>
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $course->name }}</a>
                                                 <span class="text-muted fw-bold text-muted d-block fs-7">{{ $course->category->name }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.courses.dublicate', $course) }}" class="btn btn-primary">dublicate</a>
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.courses.attachments.index', $course) }}" class="btn btn-primary">المرفقات</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.courses.lessons.index', $course) }}" class="btn btn-primary">الدروس</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ date('M d, Y' , strtotime($course->created_at)) }}</a>
                                        {{-- <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span> --}}
                                    </td>
                                    <td class="text-end">
                                        {{-- <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            {!! theme()->getSvgIcon("icons/duotone/General/Settings-1.svg", "svg-icon-3") !!}
                                        </a> --}}

                                        <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            {!! theme()->getSvgIcon("icons/duotone/Communication/Write.svg", "svg-icon-3") !!}
                                        </a>

                                        <a href="{{ route('admin.courses.delete', $course) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
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
