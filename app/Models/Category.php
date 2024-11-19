<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Definimos las columnas que pueden ser asignadas de manera masiva
    protected $fillable = [
        'name', 
        'description'
    ];

    /**
     * Relación con productos.
     * Una categoría tiene muchos productos.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
