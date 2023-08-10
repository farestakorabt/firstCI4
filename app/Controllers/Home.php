<?php namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;

class Home extends BaseController
{
    public function index()
    {
        return view('Home/index');
    }

    public function validation() 
    {
        $shop = new Shop();
        echo $shop->product('laptop', 'lenovo');
        
        $adminShop = new AdminShop();
        echo $adminShop->product('PC', 'Sony');
    }
}
