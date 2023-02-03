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
    }
}
