<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    use HasFactory;

    protected $table = "slugs";
    protected $primaryKey = "id";
    protected $fillable = [
        'libelle',
    ];

    public function produits(){
        return $this->belongsToMany(Montre::class, 'pivot_slug_produits', 'slug_id','produit_id');
    }

}
