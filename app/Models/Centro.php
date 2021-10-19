<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    public static function scopeSearch($query, $val)
    {
        return $query
            ->where('centro_nombre','like','%'.$val.'%')
            ->Orwhere('centro_codigo','like','%'.$val.'%');
    }

}
