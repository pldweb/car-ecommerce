<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            @foreach(\App\Helper\MenuNavbarHelper::generateMenuNavbar() as $label => $item)
                @if(isset($item['submenu']))
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                        <div class="dropdown-menu fade-up m-0">
                            @foreach($item['submenu'] as $title => $menu)
                                <a href="{{$menu['url']}}" class="dropdown-item">{{$title}}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{$item['url']}}" class="nav-item nav-link">{{$label}}</a>
                @endif
            @endforeach
        </div>
        <a href="{{url('login')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
