<?php

use Illuminate\Database\Seeder;

class AdresseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\models\Adresse::class, 30)->create();
    }
}
