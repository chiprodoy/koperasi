<input type="hidden" {{ $attributes }}
    id="{{$id}}"
    name="{{$name}}"

    @if (is_object($value))
        value="{{ $value->{$name} }}"
    @else
        value="{{ $value }}"
    @endif
/>
