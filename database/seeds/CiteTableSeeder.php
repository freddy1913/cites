<?php

use Illuminate\Database\Seeder;

class CiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = ['adresse_id', 'statut_id', 'codification' , 'libelle' , 'nombre_chambre' , 'nombre_place' , 'commentaire'];
        $tableau =
                   [
                       [
                           'adresse_id' => rand(1,20) ,
                           'statut_id' => 1,
                           'codification' =>'AD',
                           'libelle' => 'Administration des cités',
                           'nombre_chambre' => 0,
                           'nombre_place' => 0,
                           'commentaire' => null
                       ],

                       [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'CH',
                        'libelle' => 'Cité Houzeau',
                        'nombre_chambre' => 288,
                        'nombre_place' => 288,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'CF',
                        'libelle' => 'Cité J.Franeau',
                        'nombre_chambre' => 70,
                        'nombre_place' => 85,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'GT',
                        'libelle' => 'Cité de la Grande Triperie',
                        'nombre_chambre' => 98,
                        'nombre_place' => 104,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'EG',
                        'libelle' => 'Cité d\'Egmont',
                        'nombre_chambre' => 14,
                        'nombre_place' => 14,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'VL',
                        'libelle' => 'Cité Verlaine',
                        'nombre_chambre' => 50,
                        'nombre_place' => 70,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'KU',
                        'libelle' => 'Kots UMONS',
                        'nombre_chambre' => 88,
                        'nombre_place' => 101,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'CP',
                        'libelle' => 'Cité du Parc',
                        'nombre_chambre' => 18,
                        'nombre_place' => 42,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'KU2',
                        'libelle' => 'Kots UMONS 2',
                        'nombre_chambre' => 11,
                        'nombre_place' => 24,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'CM',
                        'libelle' => 'Cité du Manège',
                        'nombre_chambre' => 9,
                        'nombre_place' => 11,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'PL',
                        'libelle' => 'Cité de plaine',
                        'nombre_chambre' => 27,
                        'nombre_place' => 40,
                        'commentaire' => null
                    ],

                    [
                        'adresse_id' => rand(1,20) ,
                        'statut_id' => 1,
                        'codification' =>'UP',
                        'libelle' => 'MONS UPKOT',
                        'nombre_chambre' => 121,
                        'nombre_place' => 151,
                        'commentaire' => null
                    ],

                   ];

                   DB::table('cites')->insert($tableau);
    }
}
