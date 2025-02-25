<?php

namespace App\Helper;

class MenuNavbarHelper {
    public static function generateMenuNavbar()
    {
        return [
            'Home' => ['url' => url('/')],
            'Tentang Kami' => ['url' => url('tentang-kami')],
            'Hubungi Kami' => ['url' => url('hubungi-kami')],
            'Layanan' => ['url' => url('layanan')],
            'pages' => [
                'submenu' => [
                    'Booking' => ['url' => url('booking')],
                    'Tim Kami' => ['url' => url('tim')],
                    'Testimonial' => ['url' => url('testimonial')],
                ]
            ]
        ];
    }

    public static function generateNomorWA()
    {
        return [
            'nomor' => '0895365441554'
        ];
    }

    public static function generateAlamat()
    {
        return ['alamat' => 'JL. Sawo RT08/RW01'];
    }

    public static function generateWaktuBuka()
    {
        return 'Senin - Jumat 08.00 - 16.00 WIB';
    }

}
