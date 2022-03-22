<div class="book-bar">
    <a  href="{{ route('books.show' , $book) }}" class="test">
        <div class="book-box ">
            <img src="{{ asset($book->image ?? 'landing/images/book.png') }}" alt="Book">
        </div>
    </a>
    <div class="box-discreption text-algin-rtl">
        <p class="book-name">
           {{ $book->name }}
        </p>
        <p class="book-info">
            {{ $book->content }}
        </p>
        <p class="data">
            <i class="fa-regular fa-calendar-days"></i> {{ date('M d, Y' , strtotime($book->created_at)) }}
        </p>
    </div>
</div>
