<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        //return view('website.home');
        $products = DB::table('product')
         ->select('product.*')
         ->where('product.ActiveStatus','=',1)
         ->orderBy('ProductID','asc')
         ->get();
        return view('portal.home',compact('products'));
    }
    public function shop() {
        //return view('website.home');
        $products = DB::table('product')
         ->select('product.*')
         ->where('product.ActiveStatus','=',1)
         ->orderBy('ProductID','asc')
         ->get();
        return view('portal.shop',compact('products'));
    }
    public function details() {
        //return view('website.details');
        $products = DB::table('product')
         ->select('product.*')
         ->where('product.ActiveStatus','=',1)
         ->orderBy('ProductID','asc')
         ->get();
        return view('portal.details',compact('products'));
    }
    public function cart() {
        //return view('website.details');
        $products = DB::table('product')
         ->select('product.*')
         ->where('product.ActiveStatus','=',1)
         ->orderBy('ProductID','asc')
         ->get();
        return view('portal.cart',compact('products'));
    }
    public function order() {
        //return view('website.order');
        $products = DB::table('product')
         ->select('product.*')
         ->where('product.ActiveStatus','=',1)
         ->orderBy('ProductID','asc')
         ->get();
        return view('portal.order',compact('products'));
    }
}
