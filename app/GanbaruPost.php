<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GanbaruPost extends Model
{
    protected $table = "ganbaru_post";
    public function tag(){
        $this->hasMany('App\GanbaruTag','tag_id','tag_id');
    }
    public function category(){
        $this->belongsTo('App\GanbaruCategory','category_id','category_id');
    }

    public static function getAllPost(){
        $posts = GanbaruPost::select('*')->get();
        return $posts;
    }

    public static function getPostByCategory($id){
        $posts = GanbaruPost::select('*')
            ->where('category_id', '=', $id)
            ->get();
        return $posts;
    }

    public static function getPostByText($text){
        $posts = GanbaruPost::select('*')
            ->where('title', 'LIKE', '%' . $text . '%')
            ->orWhere('g_content', 'LIKE', '%' . $text . '%')
            ->get();
        return $posts;
    }
}
