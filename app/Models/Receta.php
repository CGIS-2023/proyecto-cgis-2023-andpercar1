<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion', 'fecha'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function medicamentos(){
        return $this->hasMany(Medicamento::class);
    }

    public function sanitario(){
        return $this->belongsTo(Sanitario::class);
    }
}
