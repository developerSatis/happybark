<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ItemDetailsController extends Controller
{
    public function index(Request $request){

        $id = $request->id;
        $product = DB::table('products')->where('id',$id)->first();
        $product->imagess = explode(',', $product->images);
        
        return view('frontend.item-details',compact('product'));
    }
}
