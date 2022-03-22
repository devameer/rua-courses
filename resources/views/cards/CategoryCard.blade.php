<div class="course-box ">
    <a  href="{{ route('courses.categories.show' , $category) }}">
        <img src="{{ asset($category->image ?? 'landing/images/3D.png') }}" alt="3D">
        <p class="course-name">
            {{ $category->name }}
        </p>
    </a>
</div>
