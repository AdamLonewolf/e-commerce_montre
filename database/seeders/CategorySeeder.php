<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        /*Catégorie Principale*/

        $categories = new Category(); 
        $categories-> nom = 'Rolex';
        $categories->isActivate = 1;
        $categories->save();

        $categories = new Category(); 
        $categories-> nom = 'Audemars Piguet';
        $categories->isActivate = 1;
        $categories->save();

        $categories = new Category(); 
        $categories-> nom = 'Apple';
        $categories->isActivate = 1;
        $categories->save();

        $categories = new Category(); 
        $categories-> nom = 'Daniel Wellington';
        $categories->isActivate = 1;
        $categories->save();

        $categories = new Category(); 
        $categories-> nom = 'Casio';
        $categories->isActivate = 1;
        $categories->save();

        $categories = new Category(); 
        $categories-> nom = 'Armani';
        $categories->isActivate = 1;
        $categories->save();

        /*2eme catégorie (sous catégorie)*/

        $categories = new Category(); 
        $categories-> nom = 'Cellini';
        $categories->isActivate = 0;
        $categories->pere_category_id = 1;
        $categories->save();

        $categories = new Category(); 
        $categories-> nom = 'Air-King';
        $categories->isActivate = 0;
        $categories->pere_category_id = 1;
        $categories->save();


        $categories = new Category(); 
        $categories-> nom = 'G-shock';
        $categories->isActivate = 0;
        $categories->pere_category_id = 5;
        $categories->save();
        
        $categories = new Category(); 
        $categories-> nom = 'Pro-Trek';
        $categories->isActivate = 0;
        $categories->pere_category_id = 5;
        $categories->save();
        
        $categories = new Category(); 
        $categories-> nom = 'Emalie';
        $categories->isActivate = 0;
        $categories->pere_category_id = 4;
        $categories->save();

        $categories = new Category(); 
        $categories-> nom = 'Aspiration';
        $categories->isActivate = 0;
        $categories->pere_category_id = 4;
        $categories->save();
        
        
    }
}
