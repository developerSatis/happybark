<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{
    public function index(){
        
        return view('frontend.cart');
    }
    
    public function addToCart(Request $request){
       $product_id = $request->product_id;
       $quantity =  $request->quantity;

       $product = DB::table('products')->where('id',$product_id)->first();

       DB::table('carts')->insert([
            'customer_id' => '565',
            'product_id' => $product_id,
            'product_type' => $product->type,
            'color' => $product->color,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'product_type' => $product->type,
            'quantity' => $quantity,
        // Add other columns as needed
        ]);
        return '';
    }
    
}