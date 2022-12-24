<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <input
    type="file"
    {{ $attributes->merge(['class'=>'form-control']) }}
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
    />
    @if ($value)
    <a href='{{ $value->{$name} }}'>{{ $value->{$name} }}</a>
    @endif

</div>

