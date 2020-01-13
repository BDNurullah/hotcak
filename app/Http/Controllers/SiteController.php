<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('website.home');
    }
    public function order() {
        return view('website.order');
    }
    public function details() {
        return view('website.details');
    }
}
