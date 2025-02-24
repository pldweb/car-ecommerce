<?php

namespace App\Helper;

class ProdukHelper {
    public static function generateProduk()
    {

        $produk = [
            'Mobil 1' => [
                'deskripsi_singkat' => 'Ini Deskripsi Mobil 1',
                'harga' => 100000,
                'foto' => asset('img/car-1.jpg'),
                'kategori' => 'Low Mileage'
            ],
            'Mobil 2' => [
                'deskripsi_singkat' => 'Ini Deskripsi Mobil 1',
                'harga' => 100000,
                'foto' => asset('img/car-1.jpg'),
                'kategori' => 'Low Mileage'
            ],
            'Mobil 3' => [
                'deskripsi_singkat' => 'Ini Deskripsi Mobil 1',
                'harga' => 100000,
                'foto' => asset('img/car-1.jpg'),
                'kategori' => 'Low Mileage'
            ],
            'Mobil 4' => [
                'deskripsi_singkat' => 'Ini Deskripsi Mobil 1',
                'harga' => 100000,
                'foto' => asset('img/car-1.jpg'),
                'kategori' => 'Low Mileage'
            ],

        ];

        return $produk;

    }
}
