<x-base-layout>

    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">الدروس</span>

                <span class="text-muted mt-1 fw-bold fs-7">إضافة در جديد</span>
            </h3>

        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <form id="add-edit-project" method="post" action="{{ $isCreating ? route('admin.courses.lessons.store' , $course) : route('admin.courses.lessons.update', ['lesson' => $lesson , 'course' => $course]) }}" enctype="multipart/form-data">
                @csrf
                @if (!$isCreating)
                    @method('PUT')
                @endif
                <div class="mb-10">
                    <label class="form-label">إسم الدرس</label>
                    <input type="text" class="form-control form-control-solid" name="title" value="{{ $lesson->title }}" placeholder="إسم الدرس">
                </div>
                <div class="mb-10">
                    <label class="form-label"> رابط الفيديو</label>
                    <input type="text" class="form-control form-control-solid" name="video" value="{{ $lesson->video }}" placeholder="رابط الفيديو">
                </div>
                <div class="mb-10">
                    <label class="form-label"> طول الفيديو</label>
                    <input type="text" class="form-control form-control-solid" name="video_length" value="{{ $lesson->video_length }}" placeholder="طول الفيديو">
                </div>
                <div class="d-flex">
                    <button class="btn btn-primary btn-lg">حفظ البيانات</button>
                </div>
            </form>
        </div>
    </div>



</x-base-layout>
