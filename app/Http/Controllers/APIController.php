<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
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
    // Categories
    public function getCategories()
    {
        $categories = Categories::all();
        return response()->json($categories);
    }
}
