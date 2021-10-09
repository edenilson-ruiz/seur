<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model
{
    use HasFactory;

    protected $table = 'ocupaciones';

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'ocupacion_id');
    }
}
