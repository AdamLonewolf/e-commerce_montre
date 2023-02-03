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
}
