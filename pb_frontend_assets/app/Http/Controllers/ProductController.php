<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(Request $request)
    {

        $id = $request->input('id');

        $products =[
            [
                "imageUrl" => asset('images/dog.jpg')

            ],
            [
                "imageUrl" => asset('images/dog1.jpg')

            ]
        ];
        
        $product = $products[$id];
        //var_dump($product);

        return view('product.show',[
            "product" => $product
        ]);
        
    }
}
