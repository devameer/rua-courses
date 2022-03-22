<div class="card">
    <a href="{{ route('courses.show' , $course) }}">
        <img class="card-img-top" src="/landing/images/UI-UX-From-Scratch.png">
        {{-- <img class="second-card-img-top" src="/landing/images/ux-ui-design.png"> --}}
        <div class="card-body ">
            <h5 class="card-title ">{{ $course->name }}</h5>
            <p class="card-text ">{{ $course->teacher->name }}</p>
        </div>
    </a>
</div>
