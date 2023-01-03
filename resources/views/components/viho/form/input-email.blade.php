<div class="mb-3">
    @isset($label)
        <label for="{{$name}}" class="form-label">{{$label}}</label>
    @endisset

<div class="input-group">
    <span class="input-group-text"><i class="icon-email"></i></span>
    <input type="email" {{ $attributes->merge(['class'=>'form-control']) }}

    id="{{$id}}"
    name="{{$name}}"

    @if (is_object($value))
        value="{{ $value->{$name} }}"
    @else
        value="{{ $value }}"
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
</div>
</div>
