<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'abierto',
    ];

    public function medicamentos(){
        return $this->hasMany(Medicamento::class);
    }

    public function clientes(){
        return $this->belongsToMany(Cliente::class)->withPivot('codigo_paciente');
    }

}
