<style>
    div#error_modal .image img {
        max-height: 100px;
    }

    div#error_modal .image {
        text-align: center;
        margin-bottom: 30px;
    }

    div#error_modal ul {
        list-style: none;
    }

    div#error_modal ul li:before {
        content: "";
        width: 10px;
        height: 10px;
        background: #dd636e;
        display: block;
        border-radius: 50%;
        margin: 0 10px;
    }

    div#error_modal ul li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 17px;
        color: #444;
        font-weight: 600;
        margin-bottom: 10px;
    }

    div#success_modal .image img {
        max-height: 100px;
    }

    div#success_modal .image {
        text-align: center;
        margin-bottom: 30px;
    }

    div#success_modal p {
        font-size: 17px;
        color: #444;
        font-weight: 600;
        margin-bottom: 10px;
        text-align: center;
        line-height: 1.8;
    }

</style>
<?php
if (!isset($errors)) {
    $errors = json_decode(session('errors'), true);
    $errors = !empty($errors) ? $errors : [];
} else {
    if (!is_array($errors) && \Illuminate\Support\ViewErrorBag::class == get_class($errors)) {
        $errors = $errors->all();
    }
}
session()->remove('errors');
?>
@if (count($errors) > 0)
    <div class="modal fade" id="error_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close btn" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="image">
                        <img src="{{ asset('img/icons/warning.svg') }}" alt="">
                    </div>
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-times mx-2"></i> <span class="mx-2">{{ __('Close') }}</span> </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(window).on('load', function() {
            $('#error_modal').modal('show')
        })
    </script>


@endif

@if (session()->has('success'))
    <div class="modal fade" id="success_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close btn" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="image">
                        <img src="{{ asset('img/icons/accept.svg') }}" alt="">
                    </div>
                    <p>{!! session()->get('success') !!}</p>

                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-times mx-2"></i> <span class="mx-2">{{ __('Close') }}</span> </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var success_modal = new bootstrap.Modal(document.getElementById('success_modal'))

    </script>
@endif

@if (session()->has('error'))

    <div class="modal fade" id="error_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close btn" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="image">
                        <img class="lazyload" data-src="{{ asset('images/warning.svg') }}" alt="">
                    </div>
                    <ul>
                        <li> {{ session()->get('error') }}</li>
                    </ul>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-times mx-2"></i> <span class="mx-2">{{ __('Close') }}</span> </button>
                </div>
            </div>
        </div>
    </div>
    <script>
                var error_modal = new bootstrap.Modal(document.getElementById('error_modal'))

        // $(window).on('load', function() {
        //     $('#error_modal').modal('show')
        // })
    </script>

@endif
