<?php

namespace App\Helper;

class MenuSidebarHelper {
    public static function generateMenuSidebar()
    {
        $dataMenu = [
            'Dashboard' => [
                'url' => url('dashboard'),
                'icon' => 'fa fa-users',
            ],
            'Master Penjualan' => [
                'icon' => 'fa fa-users',
                'submenu' => [
                    'Produk' => [
                        'url' => url('admin/produk'),
                        'icon' => 'fa fa-users',
                    ],
                    'Brand' => [
                        'url' => url('admin/brand'),
                        'icon' => 'fa fa-users',
                    ],
                ],
            ],
            'Master Pelanggan' => [
                'icon' => 'fa fa-users',
                'submenu' => [
                    'Produk' => [
                        'url' => url('admin/produk'),
                        'icon' => 'fa fa-users',
                    ],
                    'Brand' => [
                        'url' => url('admin/brand'),
                        'icon' => 'fa fa-users',
                    ],
                ],
            ],
        ];

        return $dataMenu;
    }
}
