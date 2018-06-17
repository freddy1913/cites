<?php

use Illuminate\Database\Seeder;

class SignaletiqueAdresseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1 ; $i < 15 ; $i++)
        {
            DB::table('signaletique_adresse')->insert(['signaletique_id' => $i,
                                                       'adresse_id' => $i ]);

           DB::table('signaletique_adresse')->insert(['signaletique_id' => $i,
           'adresse_id' => $i+15 ]);


        }
    }
}
