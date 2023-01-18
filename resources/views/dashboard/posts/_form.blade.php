<x-auth-validation-errors />

@push('styles')
    <link href="{{ asset('css/tagify.css') }}" rel="stylesheet" type="text/css" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

<div class="form-group">
    <x-form.input label="عنوان المقالة" class="form-control-lg" name="title" :value="$post->title" />
</div>

<div class="form-group">
    <x-form.select id="category_id" name="category_id" label="الفسم:" :selected="$post->category_id" :options="$categories" />
</div>


<div class="form-group">
    <label for="">نص المقالة</label>
    <x-form.textarea name="description" id="summernote" :value="$post->description" />
</div>



<div class="form-group">
    <x-form.label id="image">صورة المقالة</x-form.label>
    <x-form.input type="file" name="image" accept="image/*" />
    @if ($post->image)
        <img src="{{ $post->image_url }}" alt="" height="50">
    @endif
</div>


<div class="form-group">
    <x-form.input label="الوسوم" name="tags" :value="$tags" />
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>



@push('scripts')
    <script src="{{ asset('js/tagify.min.js') }}"></script>
    <script src="{{ asset('js/tagify.polyfills.min.js') }}"></script>
    <script>
        var inputElm = document.querySelector('[name=tags]'),
            tagify = new Tagify(inputElm);
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ar-AR.js"></script>

    <script>
        $('#summernote').summernote({
            // placeholder: 'ادخل المقالة',
            // tabsize: 2,
            // height: 120,
            // toolbar: [
            //     ['style', ['style']],
            //     ['font', ['bold', 'underline', 'clear']],
            //     ['color', ['color']],
            //     ['para', ['ul', 'ol', 'paragraph']],
            //     ['table', ['table']],
            //     ['insert', ['link', 'picture', 'video']],
            //     ['view', ['fullscreen', 'codeview', 'help']]
            // ],
            lang: "ar-AR",
            toolbar: [
                // [groupName, [list of button]]
                ['Insert', ['picture', 'link', 'video', 'table', 'hr', ]],
                ['Font Style', ['fontname', 'fontsize', 'fontsizeunit', 'color', 'forecolor', 'backcolor',
                    'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear',
                ]],
                ['Paragraph style', ['style', 'ol', 'ul', 'paragraph', 'height', ]],
                ['Misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help', ]],
                // your settings
            ],
        });
    </script>
@endpush


