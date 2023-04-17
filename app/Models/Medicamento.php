<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'miligramos', 'farmacia_id'];

    protected $casts = [
        'fecha_caducidad' => 'datetime:Y-m-d'
    ];

    public function proveedors(){
        return $this->hasMany(Proveedor::class);
    }

    public function farmacia(){
        return $this->belongsTo(Farmacia::class);
    }

}
