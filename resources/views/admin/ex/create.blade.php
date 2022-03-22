<x-base-layout>
    @section('styles')
        @include('admin.inc.editor', ['type' => $book, 'scripts' => false, 'styles' => true])
    @endsection
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">الكتب</span>

                <span class="text-muted mt-1 fw-bold fs-7">إضافة كتاب جديد</span>
            </h3>

        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <form id="add-edit-project" method="post" action="{{ $isCreating ? route('admin.books.store') : route('admin.books.update', $book) }}" enctype="multipart/form-data">
                @csrf
                @if (!$isCreating)
                    @method('PUT')
                @endif
                <div class="mb-10">
                    <label class="form-label">إسم الكتاب</label>
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $book->name }}" placeholder="إسم الكتاب">
                </div>
                <div class="form-label-group mb-10">
                    <label for="description" style="vertical-align: top;">وصف الكتاب</label>
                    {{-- <div class="editor">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quidem omnis consectetur quo, consequatur labore laborum voluptas excepturi minus quas natus animi sit exercitationem sequi quos impedit vero minima dignissimos!</div> --}}
                    <textarea id="description" name="description" data-length="1000" class="form-control d-none char-textarea" rows="3" placeholder="Description">{{ $book->description }}</textarea>

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
                <div class="mb-10"><label class="form-label mb-5">صورة الكتاب</label>
                    <div>
                        @include('admin.inc.inputImage', ['image' => $book->image, 'name' => 'image'])
                    </div>
                </div>
                <div class="d-flex">
                    <button class="btn btn-primary btn-lg">حفظ البيانات</button>

                </div>
            </form>
        </div>
    </div>

    @section('scripts')
        @include('admin.inc.editor', ['type' => $book, 'scripts' => true, 'styles' => false, 'fields' => ['description']])
    @endsection

</x-base-layout>
