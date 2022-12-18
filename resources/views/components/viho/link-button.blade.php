<a {{ $attributes }} href='{{$href}}'>
    @if(isset($icon))
        <i data-feather='{{$icon}}'></i>
    @endif
    {{ $slot }}
</a>
