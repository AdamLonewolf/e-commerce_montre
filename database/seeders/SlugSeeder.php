<?php

namespace Database\Seeders;

use App\Models\Slug;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = new Slug();
        $slug->libelle = 'luxe';
        $slug->save();

        $slug = new Slug();
        $slug->libelle = 'cher';
        $slug->save();

        $slug = new Slug();
        $slug->libelle = 'pacotille';
        $slug->save();

        $slug = new Slug();
        $slug->libelle = 'unique';
        $slug->save();
    }
}
