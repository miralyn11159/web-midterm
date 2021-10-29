<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderControllerAPI extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return response()->json(['orders'=>$orders]);
    }
}
