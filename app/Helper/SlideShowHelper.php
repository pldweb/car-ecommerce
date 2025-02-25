<?php

namespace App\Helper;

class SlideShowHelper {
    public static function generateSlideShow()
    {

        $produk = [
            [
                'subjudul' => 'Mobil Terbaik',
                'judul' => 'Mampu Merubah Suasana Keluarga Anda',
                'foto' => asset('img/carousel-1.png'),
                'bg-foto' => asset('img/carousel-bg-1.jpg'),
                'cta' => url('google.com')
            ],[
                'subjudul' => 'Mobile Pilihan',
                'judul' => 'Nyaman, Aman, dan Tulus',
                'foto' => asset('img/carousel-2.png'),
                'bg-foto' => asset('img/carousel-bg-2.jpg'),
                'cta' => url('google.com')
            ]

        ];

        return $produk;

    }
}
