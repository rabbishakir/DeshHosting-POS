<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class ProductController extends Controller
{
    public function index(){

        $product = Product::all();
        $products =[
            ['name' => 'Apple', 'price' => 10],
            ['name' => "orange", 'price' => 20],
            ['name' => "banana", 'price' => 30],
        ];
        return view('products', ['products' => $product]);
    }

    public function show($id){
        return view('product', ['product' => $id]);
    }
}
