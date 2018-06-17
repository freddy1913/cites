<?php

use Illuminate\Database\Seeder;

class TypeOperationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableau = [
                    ['nom' => 'Recette Etudiant'],
                    ['nom' => ' Transfert de fonds'],
                    ['nom' => 'Frais financiers'],
                    ['nom' => 'Profits financiers' ],
                    ['nom' => 'Créditeurs divers' ],
                    ['nom' => 'Transfert interne'],
                    ['nom' => 'Lettrage sans factures'],
                    ['nom' => 'Dépense'],
                    ['nom' => 'Mouvements centralisateurs'],
                    ['nom' => 'Aide au logement'],
                    ['nom' => 'Rembours. Solde location']
        ];

        DB::table('type_operation')->insert($tableau);
    }
}
