<?php

use Illuminate\Database\Seeder;

class TypeChambreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\models\TypeChambre::class, 20)->create();
    }
}
