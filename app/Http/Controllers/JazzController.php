<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JazzController extends Controller
{
    function index(){
        $products = DB::select('select * from product');
        // dd($jazz);
        return view('index',compact('products'));
    }
}
