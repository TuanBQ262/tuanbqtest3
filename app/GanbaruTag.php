<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GanbaruTag extends Model
{
    protected $table = "ganbaru_tag";

    public static function getAllTag(){
        $tags = GanbaruTag::select('*')->get();
        return $tags;
    }
}
