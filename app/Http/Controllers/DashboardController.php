<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // Untuk Card Monitoring Dashboard
    private function getCardMonitoring()
    {
        $data = [
            'Total Operator' => [
                'jumlah' => 20,
                'icon' => 'fa fa-user-friends',
            ],
            'Total Pelanggan' => [
                'jumlah' => 10,
                'icon' => 'fa fa-users',
            ],
            'Total Mobil Terjual' => [
                'jumlah' => 15,
                'icon' => 'fa fa-money-check-alt',
            ],
            'Total Mobil Tersedia' => [
                'jumlah' => 15,
                'icon' => 'fa fa-car',
            ]
        ];
        return $data;
    }

    public function getIndex()
    {
        $data = self::getCardMonitoring();
        $params = ['dataCardMonitoring' => $data];
        return view('admin.index', $params);
    }
}
