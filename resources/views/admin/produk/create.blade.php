@extends('layouts.admin')
@section('content')

    {{-- Top Navigation Bar --}}
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center py-4">
                <div>
                    <a class="btn btn-danger me-2" href="{{url('admin/produk')}}">
                        <i class="fas fa-arrow-left me-2"></i>Kembali
                    </a>
                </div>
                <div>
                    <a class="btn btn-primary me-2" href="{{url('admin/produk')}}">Lihat Paket di Website</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="card shadow border-0">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="fs-5 fw-bold mb-0">Grafik Total Transaksi</h2>
                        </div>
                    </div>
                </div>
                <div class="card">

                </div>
            </div>

        </div>
        <div class="col-8">
            <div class="card shadow border-0">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="fs-5 fw-bold mb-0">Informasi Produk</h2>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="produk" class="form-label">Nama Produk</label>
                                    <input type="text" name="produk" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="produk" class="form-label">Brand Produk</label>
                                    <input id="kategoriBrand" type="text" class="form-control" placeholder="Cari...">
                                </div>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan JS Tom Select -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let select = new TomSelect("#kategoriBrand", {
                valueField: "id",
                labelField: "title",
                searchField: "title",
                load: function (query, callback) {
                    $.ajax({
                        type: "POST", // Menggunakan POST
                        url: "/admin/produk/kategori-brand",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") // CSRF untuk Laravel
                        },
                        success: function (data) {
                            callback(data); // Langsung menambahkan ke dropdown
                        },
                        error: function () {
                            callback([]);
                        }
                    });
                }
            });
        });
    </script>


@endsection
