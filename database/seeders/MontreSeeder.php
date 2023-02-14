<?php

namespace Database\Seeders;

use App\Models\Montre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MontreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $montre = new Montre(); 
        $montre->category_id = 7;
        $montre-> nom = 'Rolex en or';
        $montre-> montant ='3000000';
        $montre-> quantité ='4';
        $montre-> description ='Montre Rolex en or';
        $montre-> image ='1.jpeg';
        $montre->save();

        $montre = new Montre(); 
        $montre->category_id = 7;
        $montre-> nom = 'Rolex en argent';
        $montre-> montant ='1000000';
        $montre-> quantité ='2';
        $montre-> description ='Montre Rolex en argent';
        $montre-> image ='2.jpeg';
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Rolex en diamant';
        $montre-> montant ='10000000';
        $montre-> quantité ='10';
        $montre-> description ='Montre Rolex en diamant';
        $montre-> image ='3.jpeg';
        $montre->category_id = 8;
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Armani en or';
        $montre-> montant ='5000000';
        $montre-> quantité ='24';
        $montre-> description ='Montre Armani en or';
        $montre-> image ='4.jpeg';
        $montre->category_id = 6;
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Armani en argent';
        $montre-> montant ='1000000';
        $montre-> quantité ='45';
        $montre-> description ='Montre Armani en argent';
        $montre-> image ='5.jpeg';
        $montre->category_id = 6;
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Armani en diamant';
        $montre-> montant ='20000000';
        $montre-> quantité ='4';
        $montre-> description ='Montre Armani en diamant';
        $montre-> image ='6.jpeg';
        $montre->category_id = 6;
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Casio';
        $montre-> montant ='50000';
        $montre-> quantité ='60';
        $montre-> description ='Montre Casio';
        $montre-> image ='7.jpeg';
        $montre->category_id = 10;
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Audemars Piguet';
        $montre-> montant ='200000';
        $montre-> quantité ='3';
        $montre-> description ='Montre Audemars Piguet';
        $montre-> image ='8.jpeg';
        $montre->category_id = 2;
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Apple Watch';
        $montre-> montant ='350000';
        $montre-> quantité ='13';
        $montre-> description ='Apple Watch';
        $montre-> image ='9.jpeg';
        $montre->category_id = 3;
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Daniel Wellington en Or';
        $montre-> montant ='3500000';
        $montre-> quantité ='13';
        $montre-> description ='Daniel Wellington en Or';
        $montre-> image ='10.jpeg';
        $montre->category_id = 11;
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Daniel Wellington en argent';
        $montre-> montant ='1500000';
        $montre-> quantité ='3';
        $montre-> description ='Daniel Wellington en argent';
        $montre-> image ='11.jpeg';
        $montre->category_id = 12;
        $montre->save();

        $montre = new Montre(); 
        $montre-> nom = 'Daniel Wellington en diamant';
        $montre-> montant ='11500000';
        $montre-> quantité ='32';
        $montre-> description ='Daniel Wellington en diamant';
        $montre-> image ='12.jpeg';
        $montre->category_id = 11;
        $montre->save();
    }
}

