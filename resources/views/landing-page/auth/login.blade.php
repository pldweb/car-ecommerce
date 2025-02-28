@extends('layouts.landing-page')
@section('content')
    <section class="h-100 hero section">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9" data-aos="fade-up" data-aos-duration="1200">
                    <div class="text-center my-5">
                    </div>
                    <div class="card shadow-lg">
                        <div id="message"></div>
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            <form method="POST" onsubmit="return false;" class="needs-validation" id="form-login">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    {!! formInput('email', 'email', ['class' => 'ini']) !!}
                                </div>

                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>
                                        <a href="{{url('reset-password')}}" class="float-end">Lupa Password?</a>
                                    </div>
                                    {!! formInput('password', 'password', ['id' => 'password', 'required']) !!}
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                        <label for="remember" class="form-check-label">Remember Me</label>
                                    </div>
                                    <div>
                                        {!! formSubmit('Login', ['class' => 'ms-auto']) !!}
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Tidak punya akun? <a href="{{url('register')}}" class="text-decoration-underline">Buat Akun</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#form-login').submit(function(){
                let dataInput = new FormData(this);
                console.log(dataInput);
                ajxProcess('/auth/login/login-action', dataInput, '#message' )
            })
        })
    </script>

@endsection
