<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderSuccessController extends Controller
{
    public function index(){
        return view('frontend.order-sucsess');
    }}
