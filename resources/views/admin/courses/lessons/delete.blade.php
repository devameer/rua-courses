<x-base-layout>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">هل أنت متأكد من <b>حذف</b> عنصر بإسم: <span style="color:red;">{{ $lesson->title }}</span>?</h4>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.courses.lessons.destroy', ['course' => $course , 'lesson'=> $lesson ]) }}">
                @csrf
                @method("DELETE")

                <div class="d-flex mt-2">
                    <button type="submit" class="btn btn-danger mr-1">تأكيد الحذف</button>
                    <a href="{{ route('admin.courses.lessons.index' , $course) }}" class="btn btn-secondary">إلغاء الحذف</a>
                </div>
            </form>
        </div>
    </div>
</x-base-layout>

