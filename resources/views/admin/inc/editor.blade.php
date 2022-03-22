    @if ($styles)
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset('quill/katex.min.css') }}">
        <link rel="stylesheet" href="{{ asset('quill/monokai-sublime.min.css') }}">
        <link rel="stylesheet" href="{{ asset('quill/quill.snow.css') }}">
        <link rel="stylesheet" href="{{ asset('quill/quill.bubble.css') }}">
        <link rel="stylesheet" href="{{ asset('quill/form-quill-editor.css') }}">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Roboto+Slab&family=Slabo+27px&family=Sofia&family=Ubuntu+Mono&display=swap" rel="stylesheet">
        <style>
            .ql-toolbar.ql-snow+.ql-container {
                height: 500px;
            }
            .ql-snow .ql-picker:not(.ql-color-picker):not(.ql-icon-picker) svg{
                left: auto !important
            }
            .ql-clipboard{
                display:none
            }
        </style>

    @endif




    @if ($scripts)

    adaadad
        <!-- Page js files -->
        <script src="{{ asset('quill/katex.min.js') }}"></script>
        <script src="{{ asset('quill/highlight.min.js') }}"></script>
        <script src="{{ asset('quill/quill.min.js') }}"></script>
        <script>
            (function(window, document, $) {
                'use strict';



                // Bubble Editor

                @foreach ($fields as $key => $field)
                    var fullEditor = new Quill('#{{ $field }}-full-container .editor', {
                    bounds: '#{{ $field }}-full-container .editor',
                    modules: {
                    formula: true,
                    syntax: true,
                    toolbar: [
                    [
                    {
                    },
                    {
                    size: []
                    }
                    ],
                    ['bold', 'italic', 'underline', 'strike'],
                    [
                    {
                    color: []
                    },
                    {
                    background: []
                    }
                    ],

                    [
                    {
                    header: '1'
                    },
                    {
                    header: '2'
                    },
                    'blockquote',
                    'code-block'
                    ],
                    [
                    {
                    list: 'ordered'
                    },
                    {
                    list: 'bullet'
                    },

                    ],
                    [
                    {
                    align: []
                    }
                    ],
                    ['link', 'image'],
                    ['clean']
                    ]
                    },
                    theme: 'snow'
                    });
                @endforeach

                var editors = [fullEditor];
            })(window, document, jQuery);
        </script>
        <script>
            @foreach ($fields as $key => $field)
                $('#{{ $field }}-full-container .ql-editor').html(`{!! $type->{$field} !!}`)
                setInterval(() => {
                $('#{{ $field }}').val($('#{{  $field }}-full-container .ql-editor').html())

                }, 1000);
            @endforeach
        </script>
    @endif
