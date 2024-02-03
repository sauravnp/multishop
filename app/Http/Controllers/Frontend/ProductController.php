<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.product.index');
    }
    public function details()
    {
        return view('frontend.product.details');
    }
}
