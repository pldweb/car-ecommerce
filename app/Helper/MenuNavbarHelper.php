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
}
