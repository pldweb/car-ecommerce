<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
            <a href="{{url('tentang-kami')}}" class="nav-item nav-link">Tentang Kami</a>
            <a href="{{url('layanan')}}" class="nav-item nav-link">Layanan</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{url('booking')}}" class="dropdown-item">Booking</a>
                    <a href="{{url('tim')}}" class="dropdown-item">Technicians</a>
                    <a href="{{url('testimonial')}}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{url('hubungi-kami')}}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Buat Penawaran<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
