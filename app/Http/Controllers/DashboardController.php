<?php

namespace App\Http\Controllers;

use App\TransactionDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getIndex(){

        return view('admin.index');
    }
}
