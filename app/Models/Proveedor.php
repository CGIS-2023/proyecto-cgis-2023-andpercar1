<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'telefono', 'direccion', 'medicamento_id'];

    public function farmacias(){
        return $this->belongsToMany(Farmacia::class)->withPivot('fecha_pedido');
    }

    public function medicamento(){
        return $this->belongsTo(Medicamento::class);
    }
}
