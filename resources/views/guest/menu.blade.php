<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">-- Jaya Sempurna</a>
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
                    <li><a class="dropdown-item" href="{{route('guest.post.detail',$submenu['mod_name'])}}">{{$submenu['label']}}</a></li>

                    @endforeach
                </ul>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active" href="#beranda">{{$item['label']}}</a>
                </li>
            @endif

        @endforeach

      </ul>
    </div>
  </div>
</nav>
