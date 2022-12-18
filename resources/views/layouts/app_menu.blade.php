<x-viho::nav.menu>
    <li></li>
    <x-viho::nav.menu-title>General</x-viho::nav.menu-title>
    @foreach ($menu as $nav)
        @if (strpos($nav->mod_name, 'http') === 0)
            <li>
                <a class="nav-link menu-title {{ routeActive($nav->mod_name) }}"
                    href="{{ $nav->mod_name }}">
                    <i data-feather="{{$nav->icon}}"></i><span>{{ $nav->label }}</span>
                </a>
            </li>
        @else
            @can('read',$nav->mod_name)
                <li>
                    <a class="nav-link menu-title {{ routeActive($nav->mod_name) }}"
                        href="{{ url('/admin/'.$nav->mod_name)}}">
                        <i data-feather="{{$nav->icon}}"></i><span>{{ $nav->label }}</span>
                    </a>
                    @if ($nav->submenu)

                    @endif
                </li>
            @endcan
        @endif
    @endforeach

    {{-- <li class="dropdown">
        <a class="nav-link menu-title {{ prefixActive('/widgets') }}" href="javascript:void(0)"><i data-feather="airplay"></i><span>Post</span></a>
        <ul class="nav-submenu menu-content"  style="display: {{ prefixBlock('/widgets') }};">
            <li><a href="#" class="{{routeActive('general-widget')}}">Buat Baru</a></li>
            <li><a href="#" class="{{routeActive('chart-widget')}}">Tampilkan</a></li>
        </ul>
    </li> --}}
</x-viho::nav.menu>

