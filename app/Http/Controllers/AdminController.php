<?php


namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Products;
use App\Models\Shops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getProductAdminShop() {
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $products = Products::where('supplier_id', $user_id)->get();
            return response()->json($products);
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Unauthorized',
            ], 401);
        }
        
    }
    public function addProduct(Request $request) {
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $product = new Products();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->promotion_price = $request->promotion_price;
            $product->image = $request->image;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->supplier_id = $user_id;
            $product->save();
            return response()->json([
                'status' => 200,
                'message' =>'Thêm sản phẩm thành công',
            ]);
        }
    }
    public function deleteProduct($id) {
        $product = Products::findOrFail($id);
        $product->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Đã xóa sản phẩm khỏi danh sách sản phẩm',
        ]);
    }
    public function updateProduct(Request $request, $id) {
        if (auth('sanctum')->check()) {
            $product = Products::find($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->promotion_price = $request->promotion_price;
            $product->image = $request->image;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->update();

            return response()->json([
                'status' => 200,
                'message' => 'Sản phẩm đã được cập nhật',
            ]);
        }
    }
    // public function Order() {
    //     if (auth('sanctum')->check()) {

    //         $user_id = auth('sanctum')->user()->id;

    //         $shop_id = Shops::where('user_id', $user_id)->pluck('id');

    //         $order =DB::table('tbl_orders')
    //         ->whereIn('cart_id', function ($query) use ($shop_id) {
    //             $query->select('id')
    //                 ->from('carts')
    //                 ->whereIn('product_id', function ($subquery) use ($shop_id) {
    //                     $subquery->select('id')
    //                         ->from('products')
    //                         ->where('shop_id', $shop_id);
    //                 });
    //         })
    //         ->get();
    //         return response()->json($order);
    //     }
    // }
}