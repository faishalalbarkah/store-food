<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Transaction;

class DashboardController extends Controller
{
     public function index()
    {
        $customer = User::count();
        $revenue = Transaction::sum('total_price'); 
        $transaction = Transaction::count();
        return view('pages.adpanel.dashboard',[
            'customer'      => $customer,
            'revenue'       => $revenue,
            'transaction'   => $transaction
        ]);
    }
}
