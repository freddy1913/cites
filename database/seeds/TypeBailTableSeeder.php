<?php

use Illuminate\Database\Seeder;

class TypeBailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baux = [  array("type_bail" => "Vacances d'été"),
                   array("type_bail" => "Visiteurs"),
                   array("type_bail" => "10 mois"),
                   array("type_bail" => "10 mois FPMS"),
                   array("type_bail" => "12 mois"),
                   array("type_bail" => "Libre")
                ];

        foreach($baux as $bail)
        {
           DB::table('type_bail')->insert($bail);
        }
    }
}
