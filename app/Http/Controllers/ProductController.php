<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductController extends Controller
{
    public function index(){
        $name = request('name');
        $products = Products::all();
//        $userdata=[
//            ['product'=>$name,'price'=>10],
//            ['product'=>'grape','price'=>20],
//            ['product'=>'orange','price'=>30],
//        ];
        //$info=['product'=>'burger','price'=>10];
        return view('login',['products'=>$products]);

    }
    public function Show($id){
        return view('product',['product'=>$id]);

    }
}
