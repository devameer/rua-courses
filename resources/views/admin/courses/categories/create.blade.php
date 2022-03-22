<x-base-layout>
    @section('styles')
        @include('admin.inc.editor', ['type' => $category, 'scripts' => false, 'styles' => true])
    @endsection
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">التصنيفات</span>

                <span class="text-muted mt-1 fw-bold fs-7">إضافة تصنيف جديد</span>
            </h3>

        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <form id="add-edit-project" method="post" action="{{ $isCreating ? route('admin.courses.categories.store') : route('admin.courses.categories.update', $category) }}" enctype="multipart/form-data">
                @csrf
                @if (!$isCreating)
                    @method('PUT')
                @endif
                <div class="mb-10">
                    <label class="form-label">إسم التصنيف</label>
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $category->name }}" placeholder="إسم التصنيف">
                </div>

                <div class="mb-10"><label class="form-label mb-5">صورة التصنيف</label>
                    <div>
                        @include('admin.inc.inputImage', ['image' => $category->image, 'name' => 'image'])
                    </div>
                </div>
                <div class="d-flex">
                    <button class="btn btn-primary btn-lg">حفظ البيانات</button>

                </div>
            </form>
        </div>
    </div>

    @section('scripts')
        @include('admin.inc.editor', ['type' => $category, 'scripts' => true, 'styles' => false, 'fields' => ['description']])
    @endsection

</x-base-layout>
