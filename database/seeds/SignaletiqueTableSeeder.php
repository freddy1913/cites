<?php

use Illuminate\Database\Seeder;

class SignaletiqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\models\Signaletique::class, 3)->create();
    }
}
