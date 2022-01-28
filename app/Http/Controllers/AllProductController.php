<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllProductController extends Controller
{
    public function goallproduct()
    {
        return view('all-product.all-product', [
            "title" => "All Product"
        ]);
    }

    public function goproduct()
    {
        return view('product-page.product', [
            "title" => "Product"
        ]);
    }
}
