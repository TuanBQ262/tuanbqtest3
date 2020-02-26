<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopPost extends Model
{
    protected $table = "top_post";

    public static function getAllTopPost(){
        $top_posts = TopPost::select('*')->get();
        return $top_posts;
    }
}
