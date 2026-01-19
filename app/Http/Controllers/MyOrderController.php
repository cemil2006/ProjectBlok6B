<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOrderController extends Controller
{
     public function show(Request $request)
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('orders.viewmyorders', compact('orders' ));
    }
}
