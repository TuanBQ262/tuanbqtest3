<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GanbaruCategory extends Model
{
    protected $table = "ganbaru_category";

    public static function getAllCategory(){
        $categories = GanbaruCategory::select('*')->get();
        return $categories;
    }
}
