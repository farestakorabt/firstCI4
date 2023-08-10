<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('Shop');
    }

    public function product($type ='laptop', $product_id = '24')
    {
        echo "<h2>This is a product:  $type, number: $product_id</h2>";

        //return view('product');
    }

    

}
