<?php namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'CI4 blog',
            'title' => 'This is a blog page',

        ];

        $posts = ['Title 1', 'Title 2', 'Title 3'];
        $data['posts'] = $posts;


        echo view('templates/header', $data);
        echo view('blog');
        echo view('templates/footer');
    }

    public function post() 
    {
        $data = [
            'meta_title' => 'CI4 post page',
            'title' => 'This is an awsome blog',

        ];
        echo view('templates/header', $data);
        echo view('blog');
        echo view('templates/footer');
    }
    
}
