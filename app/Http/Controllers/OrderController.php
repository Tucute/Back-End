<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Orders_detail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function PlaceOrder(Request $request) {
        $order = null;
    
        if(auth('sanctum')->check()){
            $user_id = auth('sanctum')->user()->id;
            $order = new Orders();
            $order->status = $request->status;
            $order->date_order = now();
            $order->payment_method = 'Cash on delivery'; 
            $order->total_price = $request->totalPrice; 
            $order->user_id = $user_id;
            $order->save();
    
            // Lấy ID của bản ghi vừa được thêm vào bảng 'orders'
            $orderId = $order->id;
    
            // Tiếp tục xử lý
            $cartItems = $request->cartItems;
            foreach ($cartItems as $cartItem) {
                $orderDetail = new Orders_detail();
                $orderDetail->order_id = $orderId;
                $orderDetail->product_id = $cartItem['id'];
                $orderDetail->quantity = $cartItem['quantity'];
                $orderDetail->unit_price = $cartItem['price'];
                $orderDetail->save();
            }
    
            return response()->json([
                'status' => 200,
                'message' => 'Hoàn tất quá trình đặt hàng',
                'order_id' => $orderId, // Gửi ID của đơn hàng trong phản hồi nếu cần
            ]);
        }
    
        // Xử lý nếu auth('sanctum')->check() không đúng
        return response()->json([
            'status' => 403,
            'message' => 'Unauthorized',
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
