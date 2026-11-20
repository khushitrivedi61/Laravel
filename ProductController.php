<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function calculate(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        $total = $price * $quantity;

        return view('product', compact('name', 'price', 'quantity', 'total'));
    }
}
