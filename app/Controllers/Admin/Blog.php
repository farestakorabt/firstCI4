<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        echo '<h2>Welcome to my blog !</h2>';
    }

    public function createNew()
    {
        return view('blog_form');

        //return view('product');
    }

    public function saveBlog()
    {
        echo "<pre>";print_r($_POST);echo "</pre>"; die;
        //return view('product');
    }

    

}
