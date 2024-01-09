<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\Rating;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class APIController extends Controller
{
    // Products
    public function getProducts()
    {
        $products = Products::all();
        return response()->json($products);
    }
    public function getOneProducts($id)
    {
        $products = Products::where('id', $id)->first();
        return response()->json($products);
    }
    // Users
    public function getUser()
    {
        $users = Users::all();
        return response()->json($users);
    }
    public function getOneUser($id)
    {
        $user = Users::where('id', $id)->first();
        return response()->json($user);
    }
    // Categories
    public function getCategories()
    {
        $categories = Categories::all();
        return response()->json($categories);
    }

    // get comment
    public function getComment($id_product)
    {
        $comments = Rating::where('product_id', $id_product)->get();
        if ($comments->isEmpty()) {
            return response()->json(['message' => 'Không tìm thấy bình luận cho product ID đã cho'], 404);
        }
        return response()->json($comments);
    }
}
