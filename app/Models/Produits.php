<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'description',
        'prix',
        'en_stock',
        'image',
    ];
    public function paniers()
    {
        return $this->hasMany(Panier::class, 'produit_id');
    }
    
}
