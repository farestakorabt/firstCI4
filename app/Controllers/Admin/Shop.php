<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo ' <h2>Admin shop</h2>';
    }

    public function product($type, $product_id)
    {
        echo "<h2>This is an admin product </h2>";

        //return view('product');
    }

    

}
