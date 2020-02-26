<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";

    public static function getAllMenu(){
        $menus = Menu::select('*')->get();
        return $menus;
    }
}
