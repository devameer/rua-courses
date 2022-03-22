<x-base-layout>

    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">المعلمين</span>

                <span class="text-muted mt-1 fw-bold fs-7">إضافة معلم جديد</span>
            </h3>

        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <form id="add-edit-project" method="post" action="{{ $isCreating ? route('admin.teachers.store') : route('admin.teachers.update', $teacher) }}" enctype="multipart/form-data">
                @csrf
                @if (!$isCreating)
                    @method('PUT')
                @endif
                <div class="mb-10">
                    <label class="form-label">إسم المعلم</label>
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $teacher->name }}" placeholder="إسم المعلم">
                </div>
                <div class="mb-10">
                    <label class="form-label">وظيفة المعلم</label>
                    <input type="text" class="form-control form-control-solid" name="job_title" value="{{ $teacher->job_title }}" placeholder="وظيفة المعلم">
                </div>

                <div class="mb-10"><label class="form-label mb-5">صورة المعلم</label>
                    <div>
                        @include('admin.inc.inputImage', ['image' => $teacher->image, 'name' => 'image'])
                    </div>
                </div>
                <div class="d-flex">
                    <button class="btn btn-primary btn-lg">حفظ البيانات</button>

                </div>
            </form>
        </div>
    </div>


</x-base-layout>
