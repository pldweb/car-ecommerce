@extends('layouts.landing-page')
@section('content')

    <section class="h-100 hero">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                    </div>
                    <div class="card shadow-lg">
                        <div id="message"></div>
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Register Akun</h1>
                            <form method="post" onsubmit="return false;" id="register-form" class="needs-validation">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">Nama</label>
                                    {!! formInput('text', 'nama', ['required', 'autofocus']) !!}
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    {!! formInput('email', 'email', ['required', 'autofocus']) !!}
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    {!! formInput('password', 'password', ['required', 'autofocus']) !!}
                                </div>
                                {!! formInput('hidden', '_token') !!}
                                <div class="align-items-center d-flex">
                                    {!! formSubmit('Daftar Akun', ['']) !!}
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Sudah punya akun? <a href="{{url('login')}}" class="text-decoration-underline">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#register-form').submit(function() {
                var dataInput = new FormData(this);
                ajxProcess('/auth/register/register-action', dataInput, '#message')
            });
        });
    </script>


@endsection
