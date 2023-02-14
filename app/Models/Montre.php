<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montre extends Model
{
    use HasFactory;

    protected $table = "produits";
    protected $primaryKey = "id";
    protected $fillable = [
        'nom',
        'montant',
        'quantité',
        'description',
        'image',

    ];

    public function pere(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function slugs(){
        return $this->belongsToMany(Slug::class, 'pivot_slug_produits', 'slug_id', 'produit_id');
    }

    public function recommander(){
        return $this->belongsToMany(Montre::class, 'family_id', 'produits_id');
    }

    
}

