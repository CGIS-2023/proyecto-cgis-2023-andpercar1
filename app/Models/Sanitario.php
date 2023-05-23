<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanitario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellidos', 'telefono', 'DNI', 'farmacia_id'];

    public function farmacia(){
        return $this->belongsTo(Farmacia::class);
    }

    public function recetas(){
        return $this->hasMany(Receta::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
    
}
