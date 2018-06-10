<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(TypeBailTableSeeder::class);
       $this->call(CategorieEtudiantTableSeeder::class);
       $this->call(NiveauUtilisateurSeeder::class);
       $this->call(StatutCiteTableSeeder::class);
       $this->call(TypeBailTableSeeder::class);
       $this->call(SignaletiqueTableSeeder::class);
       $this->call(TypeChambreTableSeeder::class);
       $this->call(UtilisateurTableSeeder::class);
    }
}
