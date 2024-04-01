<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function index(){

        $banner = DB::table('banners')->get()->toArray();
        $products = DB::table('products')->limit(8)->orderBy('id', 'desc')->get()->toArray();
        $category = DB::table('categories')->limit(8)->get()->toArray();
        
        $brand = DB::table('brands')->limit(12)->get()->toArray();
        return view('frontend.home',compact('banner','brand','category','products'));
    }

    public function getMoreBrand(Request $request){
        $offset = $request->input('offset', 0); // Default offset to 0 if not provided

        $brand = DB::table('brands')
                    ->skip($offset)
                    ->take(12)
                    ->get()
                    ->toArray();

        $html = '';

        foreach($brand as $key => $brand){
            $html .= '<div class="col-lg-2 col-sm-6">
            <div class="product_box">
                <div class="product_image">
                    <a href="item-details.html">
                        <img class="card-img-top img-fluid"
                        src="'. asset('storage/brand/'.$brand->image) .'"
                        style="height: 220px;" alt="Card image cap">
                    </a>
                </div>
                <div class="card-body product_contain">
                    <a href="javascript:void(0);">
                        <h6 class="card-title text-center">'.$brand->name.'</h6>
                    </a>
                    </div>
                </div>
            </div>';
            
        }
            return response()->json([
                'html' => $html,
                'status' => 'success'
            ]);
    }
}

