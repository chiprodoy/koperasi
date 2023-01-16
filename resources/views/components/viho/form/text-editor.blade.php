<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <textarea

    {{ $attributes->merge(['class'=>'form-control ckeditor']) }}


    id="{{$id}}"
    name="{{$name}}"

    @if($readonly)
        readonly
    @endif

    @if($disabled)
        disabled
    @endif

    @if($autofocus)
        autofocus
    @endif

    @isset($tabindex)
        tabindex={{$tabindex}}
    @endisset

    @isset($placeholder)
        placeholder="{{$placeholder}}"
    @endisset

    @if($required)
        required
    @endif
    >@if ($value) {{ $value }} @endif</textarea>
</div>
@push('scripts')
<script type="text/javascript">
    CKEDITOR.replace('{{$name}}', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endpush
