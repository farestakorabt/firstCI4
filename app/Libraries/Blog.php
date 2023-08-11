<?php namespace App\Libraries;

class Blog 
{
    public function PostItem($params) 
    {
        return view('components/post_Item', $params);
    }
}
