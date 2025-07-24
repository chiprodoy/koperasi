<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">{{ env('APP_TITLE')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">

        @foreach ($Menu as $item)


            @if(isset($item['children']))
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="tentangDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{$item['label']}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="tentangDropdown">
                    @foreach ($item['children'] as $submenu)
                    <li>
                        @if (strpos($submenu['mod_name'],"http")===0)
                            <a class="dropdown-item" href="{{$submenu['mod_name']}}">{{$submenu['label']}}</a></li>
                        @else
                            <a class="dropdown-item" href="{{route('guest.post.detail',$submenu['mod_name'])}}">{{$submenu['label']}}</a></li>
                        @endif
                    @endforeach
                </ul>
                </li>
            @else
                <li class="nav-item">
                    {{-- active --}}
                    <a class="nav-link" href="
                    @if (strpos($item['mod_name'],"http")===0)
                        {{$item['mod_name']}}
                    @else
                        @if (Route::has($item['mod_name']))
                            {{route($item['mod_name'])}}
                        @else
                            #
                        @endif
                    @endif
                    ">{{$item['label']}}</a>
                </li>
            @endif

        @endforeach

      </ul>
    </div>
  </div>
</nav>
