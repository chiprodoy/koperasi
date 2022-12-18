<input type="hidden" {{ $attributes }}
    id="{{$id}}"
    name="{{$name}}"

    @if ($value)
    value="{{ $value->{$name} }}"
    @endif
/>
