<x-base-layout>
    @section('styles')
        @include('admin.inc.editor', ['type' => $course, 'scripts' => false, 'styles' => true])
    @endsection
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">الدورات</span>

                <span class="text-muted mt-1 fw-bold fs-7">إضافة دورة جديدة</span>
            </h3>

        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <form id="add-edit-project" method="post" action="{{ $isCreating ? route('admin.courses.store') : route('admin.courses.update', $course) }}" enctype="multipart/form-data">
                @csrf
                @if (!$isCreating)
                    @method('PUT')
                @endif
                <div class="mb-10">
                    <label class="form-label">إسم الدورة</label>
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $course->name }}" placeholder="إسم الدورة">
                </div>
                <div class="form-label-group mb-10">
                    <label for="description" style="vertical-align: top;">وصف الدورة</label>
                    {{-- <div class="editor">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quidem omnis consectetur quo, consequatur labore laborum voluptas excepturi minus quas natus animi sit exercitationem sequi quos impedit vero minima dignissimos!</div> --}}
                    <textarea id="description" name="description" data-length="1000" class="form-control d-none char-textarea" rows="3" placeholder="Description">{{ $course->description }}</textarea>

                    <section dir="ltr" class="description-full-editor">
                        <div class="card">
                            <div id="description-full-wrapper">
                                <div id="description-full-container">
                                    <div class="editor">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                </div>
                <div class="mb-10"><label class="form-label mb-5">صورة الدورة</label>
                    <div>
                        @include('admin.inc.inputImage', ['image' => $course->image, 'name' => 'image'])
                    </div>
                </div>
                <div class="form-group mb-10">
                    <label class="form-label mb-5">مدرس الدورة</label>
                    <select class="form-select" name="teacher_id" data-placeholder="Select an option">
                        <option value="">إختر مدرس الدورة</option>
                        @foreach ($teachers as $teacher)
                            <option {{ $course->teacher_id == $teacher->id ? 'selected' : null }} value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-10">
                    <label class="form-label mb-5">تصنيف الدورة</label>
                    <select class="form-select "  name="category_id" data-placeholder="Select an option">
                        <option value="">إختر تصنيف الدورة</option>
                        @foreach ($categories as $category)
                            <option {{ $course->category_id == $category->id ? 'selected' : null }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex">
                    <button class="btn btn-primary btn-lg">حفظ البيانات</button>

                </div>
            </form>
        </div>
    </div>

    @section('scripts')
        @include('admin.inc.editor', ['type' => $course, 'scripts' => true, 'styles' => false, 'fields' => ['description']])
    @endsection

</x-base-layout>
