@extends('layouts.admin')
@section('content')

        {{-- 4 Card Count Operator --}}
        <div class="row">
            @include('admin.komponen-admin.card-top')
        </div>

        <div class="row mb-4">
            @include('admin.komponen-admin.dashboard.grafik-total-transaksi')
            @include('admin.komponen-admin.dashboard.grafik-perkembangan-transaksi')
        </div>

@endsection
