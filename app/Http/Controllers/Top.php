<?php

namespace App\Http\Controllers;

use App\TopPost;
use App\Menu;
use Illuminate\Http\Request;

class Top extends Controller
{
    public function getList()
    {
        $top_posts = TopPost::getAllTopPost();
        $menus = Menu::getAllMenu();
        return view('top', compact('top_posts','menus'));
    }
}
