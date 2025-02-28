@extends('layouts.admin')
@section('content')

    @include('admin.komponen-admin.top-navbar')

    @include('admin.komponen-admin.sidebar')

    <main class="content">

        @include('admin.komponen-admin.navbar')

        {{-- 4 Card Count Operator --}}
        <div class="row">
            @include('admin.komponen-admin.card-top')
        </div>

    </main>


@endsection
