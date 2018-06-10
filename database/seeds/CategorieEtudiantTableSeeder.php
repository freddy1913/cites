<?php

use Illuminate\Database\Seeder;

class CategorieEtudiantTableSeeder extends Seeder {

	public function run()
	{
        $categories = ['Etudiant' , 'Extérieur', 'Membre du personnel', 'En attente d\'inscription'];

       foreach($categories as $categorie)
       {
		DB::table('categorie_etudiant')->insert(['nom' => $categorie]);
       }
	}
}