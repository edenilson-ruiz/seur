<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function usuario_tipo_documento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    public function referencia()
    {
        return $this->belongsTo(Referencia::class);
    }

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }

    public function motivo_atencion()
    {
        return $this->belongsTo(MotivoAtencion::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }

    public function estado_civil()
    {
        return $this->belongsTo(EstadoCivil::class);
    }

    public function escolaridad()
    {
        return $this->belongsTo(Escolaridad::class);
    }

    public function ocupacion() {
        return $this->belongsTo(Ocupacion::class);
    }

    public function informante_tipo_documento()
    {
        return $this->belongsTo(TipoDocumento::class, 'informante_tipo_documento_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function scopeSearch($query, $val)
    {
        return $query
            ->where('usuario_nombre_1','like','%'.$val.'%')
            ->Orwhere('usuario_apellido_1','like','%'.$val.'%')
            ->Orwhere('usuario_email','like','%'.$val.'%');
    }
}
