<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Definimos las columnas que pueden ser asignadas de manera masiva
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'category_id'
    ];

    /**
     * Relación con la categoría.
     * Un producto pertenece a una categoría.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
