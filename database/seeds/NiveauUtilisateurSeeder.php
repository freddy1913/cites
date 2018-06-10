<?php

use Illuminate\Database\Seeder;

class NiveauUtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $niveaux = [ array('name' => 'Administrateur'),
                    array('name' => 'Superviseur'),
                    array('name' => 'Utilisateur')
                  ];

       foreach($niveaux as $niveau)
       {
       	DB::table('niv_utilisateur')->insert($niveau);
       }         
    }
    
}
