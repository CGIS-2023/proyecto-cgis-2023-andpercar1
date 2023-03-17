<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'marca', 'fecha_caducidad'];

    protected $casts = [
        'fecha_caducidad' => 'datetime:Y-m-d'
    ];

    public function proovedors(){
        return $this->hasMany(Proovedor::class);
    }

    public function proovedors(){
        return $this->hasMany(Proovedor::class);
    }

}
