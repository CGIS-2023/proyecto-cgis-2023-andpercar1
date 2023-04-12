<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'DNI',
        'telefono',
        'num_seguridadsocial',
        'direccion',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function farmacias(){
        return $this->belongsToMany(Farmacia::class)->withPivot('codigo_paciente');
    }

}
