@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('theme/viho/assets/css/date-picker.css') }}">
@endpush

<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <input
    type="text"
    {{ $attributes->merge(['class'=>'datepicker-here form-control digits']) }}
    id="{{$id}}"
    name="{{$name}}"

    @if ($value)
        value="{{ $value->{$name} }}"
    @endif

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
    data-language="en"
    />
</div>
@push('scripts')
<script src="{{ asset('theme/viho/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ asset('theme/viho/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
<script src="{{ asset('theme/viho/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
@endpush
