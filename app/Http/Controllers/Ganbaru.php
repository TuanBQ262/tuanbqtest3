<?php

namespace App\Http\Controllers;

use App\GanbaruCategory;
use App\GanbaruTag;
use App\GanbaruPost;
use Illuminate\Http\Request;

class Ganbaru extends Controller
{
    public function getGanbaruPost(Request $request)
    {
        $categories = GanbaruCategory::getAllCategory();
        $tags = GanbaruTag::getAllTag();

        $search_cate = $request->input('c');
        $search_tag = $request->input('tag');
        $search_text = $request->input('txt');
        
        if($search_cate != null) {
            $posts = GanbaruPost::getPostByCategory($search_cate);
        } elseif ($search_text != null){
            $posts = GanbaruPost::getPostByText($search_text);
        } else $posts = GanbaruPost::getAllPost();

        return view('ganbaru', compact('categories','tags','posts','search_tag','search_cate'));
    }

    public function getGanbaruPostByCategory(){
        // $posts = GanbaruPost::getPostByCategory($id);
        $id=2;
        return view('ganbaru', compact('id'));
    }
}
