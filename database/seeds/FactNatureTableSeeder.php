<?php

use Illuminate\Database\Seeder;

class FactNatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $tableau = [ 
                    [
                       "C_LIBELLE" => 'Loyer'
                    ],
                    [
                        "C_LIBELLE" => 'Frais divers'
                     ],
                     [
                        "C_LIBELLE" => 'Remboursement'
                     ],
                     [
                        "C_LIBELLE" => 'Garantie'
                     ],
                     [
                        "C_LIBELLE" => 'Régularisation'
                     ],
                     [
                        "C_LIBELLE" => 'Régularisation - paiement sans factures'
                     ],
                     [
                        "C_LIBELLE" => 'Situation Avril 2017'
                     ]
              
         ];

         DB::table('fact_nature')->insert($tableau);
    }
}
