<div class="file-bar">
    <div class="file-box">
        <img src="{{ $file->image ?? 'landing/images/documents.png' }}" alt="Book">
        <div class="box-discreption">
            <p class="file-name">
               {{ $file->name }} </p>
            <p class="book-info">
               {{ $file->description }} </p>
            <div class="download-box">
                <a href="{{ asset($file->file) }}" download class="download-link">
                    تحميل
                    <img src="/landing/images/donwload.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
