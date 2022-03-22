<x-base-layout>

    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">المرفقات</span>

                <span class="text-muted mt-1 fw-bold fs-7">إضافة مرفق جديد</span>
            </h3>

        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <form id="add-edit-project" method="post" action="{{ $isCreating ? route('admin.courses.attachments.store' , $course) : route('admin.courses.attachments.update', ['attachment' => $attachment , 'course' => $course]) }}" enctype="multipart/form-data">
                @csrf
                @if (!$isCreating)
                    @method('PUT')
                @endif
                <div class="mb-10">
                    <label class="form-label">إسم المرفق</label>
                    <input type="text" class="form-control form-control-solid" name="title" value="{{ $attachment->title }}" placeholder="إسم المرفق">
                </div>


                <div>
                    <label for="formFileLg" class="form-label">الملف</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="file">
                </div>
                <div class="d-flex">
                    <button class="btn btn-primary btn-lg">حفظ البيانات</button>

                </div>
            </form>
        </div>
    </div>



</x-base-layout>
