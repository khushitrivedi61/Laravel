<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index(Request $request)
    {
        $mobiles = [
            ['id' => 1, 'name' => 'iPhone 15', 'company' => 'Apple', 'price' => 65000, 'stock' => 'Available'],
            ['id' => 2, 'name' => 'iPhone 16', 'company' => 'Apple', 'price' => 80000, 'stock' => 'Out of Stock'],

            ['id' => 3, 'name' => 'Galaxy S24', 'company' => 'Samsung', 'price' => 75000, 'stock' => 'Available'],
            ['id' => 4, 'name' => 'Galaxy A55', 'company' => 'Samsung', 'price' => 27000, 'stock' => 'Available'],

            ['id' => 5, 'name' => 'Oppo Reno 12', 'company' => 'Oppo', 'price' => 32000, 'stock' => 'Out of Stock'],
            ['id' => 6, 'name' => 'Oppo A3 Pro', 'company' => 'Oppo', 'price' => 18000, 'stock' => 'Available'],

            ['id' => 7, 'name' => 'Vivo V30', 'company' => 'Vivo', 'price' => 35000, 'stock' => 'Available'],
            ['id' => 8, 'name' => 'Vivo Y28', 'company' => 'Vivo', 'price' => 14000, 'stock' => 'Out of Stock']
        ];

        $company = $request->input('company', '');
        $model = $request->input('model', '');

        $results = [];

        if ($company != '' && $model != '') {
            foreach ($mobiles as $mobile) {
                if ($mobile['company'] == $company && $mobile['name'] == $model) {
                    $results[] = $mobile;
                }
            }
        }

        return view('mobiles', compact(
            'mobiles',
            'company',
            'model',
            'results'
        ));
    }
}
