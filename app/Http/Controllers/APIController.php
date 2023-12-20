<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class APIController extends Controller
{
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
}
