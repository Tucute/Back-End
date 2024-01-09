<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Orders_detail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function PlaceOrder(Request $request) {
        if(auth('sanctum')->check()){
            $user_id = auth('sanctum')->user()->id;
            $order = new Orders();
            $order->status = $request->status;
            $order->date_order = now();
            $order->payment_method = 'Cash on delivery'; 
            $order->total_price = $request->totalPrice; 
            $order->user_id = $user_id;
            $order->save();
        }
        $orderId = $order->id;
        $cartItems = $request->cartItems;
        foreach ($cartItems as $cartItem) {
            $orderDetail = new Orders_detail();
            $orderDetail->order_id = $orderId;
            $orderDetail->product_id = $cartItem['product_id'];
            $orderDetail->quantity = $cartItem['quantity'];
            $orderDetail->unit_price = $cartItem['unit_price'];
            $orderDetail->save();
        }
        return response()->json([
            'status' => 200,
            'message' => 'Hoàn tất quá trình đặt hàng'
        ]);
    }
    public function getOrder() {
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $order = Orders::where('user_id', $user_id)->get();
            return response()->json($order);
        }
    }
}   
