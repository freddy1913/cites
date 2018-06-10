<?php

use Illuminate\Database\Seeder;

class StatutCiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $statuts = [array('nom' => 'Actif') , array('nom' =>'Inactif') , array('nom' =>'En travaux')];

      foreach($statuts as $statut)
      {
	   DB::table('statut_cite')->insert($statut);
	  }
    }
}
