<?php namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\HTTP\Request;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            // 'meta_title' => 'CI4 blog',
            'title' => 'This is a blog page',
        ];

        $posts = ['Title 1', 'Title 2', 'Title 3'];
        $data['posts'] = $posts;

        return view('blog', $data);
    }

    public function post() 
    {
        $data = [
            'meta_title' => 'CI4 post page',
            'title' => 'This is an awsome blog',
        ];
        return view('single_blog', $data);
    }
    
    // public function new(Request $request)
    // {
    //     $data = [
    //         'meta_title' => 'New post',
    //         'title' => 'Create a new post',
    //     ];        

    //     if($request->getRequestMethod() == 'POST') {
    //         $model = new BlogModel();
    //         $model->save($request->getPost());
    //     }
    //     return view('new_post', $data);
    // }
    
    public function new()
    {
        $data = [
            'meta_title' => 'New post',
            'title' => 'Create a new post',
        ];        

        if($this->request->getMethod() == 'POST') {
            $model = new BlogModel();
            $model->save($_POST);
        }
        return view('new_post', $data);
    }
    
    
}
