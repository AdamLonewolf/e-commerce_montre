<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = [
        'nom',
        'isActivate',
    ];

    public function pereCategory(){
        return $this->hasMany(Category::class, "pere_category_id");
    }
    public function categorieParent(){
        return $this->belongsTo(Category::class, "pere_category_id");
    }
    public function pereMontre(){
        return $this->hasMany(Montre::class, "category_id");
    }
    public function petitFilsProduits(){
        return $this->hasManyThrough(Montre::class, Category::class, 'pere_category_id', 'category_id');
    }

    public function grandPereProduit(){
        return $this->pereMontre()->with('pere')->get()->merge($this->petitFilsProduits()->with('pere')->get());
    }
}
  