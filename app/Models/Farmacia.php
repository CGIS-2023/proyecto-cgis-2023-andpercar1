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
        return $this->belongsToMany(Medicamento::class)->withPivot('codigo_stock');
    }

    public function clientes(){
        return $this->belongsToMany(Cliente::class)->withPivot('codigo_paciente');
    }

    public function proveedors(){
        return $this->belongsToMany(Proveedor::class)->withPivot('fecha_pedido');
    }

    public function sanitarios(){
        return $this->hasMany(Sanitario::class);
    }

}
