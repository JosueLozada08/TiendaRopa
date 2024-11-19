<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Definimos las columnas que pueden ser asignadas de manera masiva
    protected $fillable = [
        'user_id', 
        'status', 
        'total'
    ];

    /**
     * Relación con el usuario.
     * Una orden pertenece a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con productos (supone una tabla pivote order_product).
     * Una orden puede tener muchos productos.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
