<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <textarea

    {{ $attributes->merge(['class'=>'form-control']) }}


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
