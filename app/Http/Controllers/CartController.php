<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function getCart(){
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $carts = Carts::where('user_id', $user_id)->get();
            return response()->json($carts);
        }
        else {
            return response()->json([
                'status' => 401,
                'message' =>'Undefine authorizo',
            ]);
        }
    }


    public function addToCart(Request $request)
    {
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $product_id = $request->product_id;
            $product_qty = $request->product_qty;

            $cart = Carts::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

            if ($cart) {
                $product_qty += 1;
                Carts::where('user_id', $user_id)
                    ->where('product_id', $product_id)
                    ->update(['quantity' => $product_qty]);
                return response()->json([
                    'status' => 201,
                    'message' =>'Sản phẩm này đã tồn tại trong giỏ hàng ! Cập nhật số lượng thành công',
                ]);
            } else {
                $cart = new Carts();
                $cart->user_id = $user_id;
                $cart->product_id = $product_id;
                $cart->quantity = $product_qty;
                $cart->save();
                return response()->json([
                    'status' => 200,
                    'message' => 'Thêm vào giỏ hàng thành công',
                ]);
            }
        }
        else {
            return response()->json([
                'status' => 401,
                'message' => 'Vui lòng đăng nhập để sử dụng tính năng này',
            ]);
        }
    }

    public function updateQuantity($cart_id, $scope) {
            $cart = Carts::where('id',$cart_id)->first();
            if ($scope === 'inc') {
                if ($cart->quantity < 10) {
                    $cart -> quantity += 1;
                    $cart -> update();  
                }
            }
            else if ($scope === 'dec') {
                if ($cart->quantity > 1) {
                    $cart -> quantity -= 1;
                    $cart -> update();
                }
            }
            return response()->json([
                'status' => 200,
                'message' => 'Cập nhật số lượng thành công',
            ]);
    }
    public function Delete($cart_id) {
        $cart = Carts::findOrFail($cart_id);
        $cart->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Đã xóa sản phẩm khỏi giỏ hàng',
        ]);
    }
}