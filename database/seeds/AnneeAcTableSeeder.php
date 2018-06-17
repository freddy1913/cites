<?php

use Illuminate\Database\Seeder;

class AnneeAcTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = ['annee' , 'debut_bail' , 'fin_bail' , 'bail_fpms' , 'fin_bail_fpms', 'kot_umons_debut', 'kot_umons_fin', 'annee_defaut'];
        $tableau = [
                      [ 
                        $title[0] => '2012-2013',
                        $title[1] => '01/09/2012',
                        $title[2] => '30/06/2013',
                        $title[3] => '01/09/2012',
                        $title[4] => '01/07/2013',
                        $title[5] => '01/09/2012',
                        $title[6] => '31/08/2013',
                        $title[7] => 0
                      ],

                      [ 
                        $title[0] => '2013-2014',
                        $title[1] => '01/09/2013',
                        $title[2] => '30/06/2014',
                        $title[3] => '12/09/2013',
                        $title[4] => '12/07/2014',
                        $title[5] => '01/09/2013',
                        $title[6] => '31/08/2014',
                        $title[7] => 0
                      ],

                      [ 
                        $title[0] => '2014-2015',
                        $title[1] => '01/09/2014',
                        $title[2] => '30/06/2015',
                        $title[3] => '12/09/2014',
                        $title[4] => '12/07/2015',
                        $title[5] => '01/09/2014',
                        $title[6] => '31/08/2015',
                        $title[7] => 0
                      ],

                      [ 
                        $title[0] => '2015-2016',
                        $title[1] => '01/09/2015',
                        $title[2] => '30/06/2016',
                        $title[3] => '12/09/2015',
                        $title[4] => '12/07/2016',
                        $title[5] => '01/09/2015',
                        $title[6] => '31/08/2016',
                        $title[7] => 0
                      ],

                      [ 
                        $title[0] => '2016-2017',
                        $title[1] => '01/09/2016',
                        $title[2] => '30/06/2017',
                        $title[3] => '12/09/2016',
                        $title[4] => '12/07/2017',
                        $title[5] => '01/09/2016',
                        $title[6] => '31/08/2017',
                        $title[7] => 0
                      ],

                      [ 
                        $title[0] => '2017-2018',
                        $title[1] => '01/09/2017',
                        $title[2] => '30/06/2018',
                        $title[3] => '12/09/2017',
                        $title[4] => '12/07/2018',
                        $title[5] => '01/09/2017',
                        $title[6] => '31/08/2018',
                        $title[7] => 0
                      ],

                      [ 
                        $title[0] => '2018-2019',
                        $title[1] => '01/09/2018',
                        $title[2] => '30/06/2019',
                        $title[3] => '12/09/2018',
                        $title[4] => '12/07/2019',
                        $title[5] => '01/09/2018',
                        $title[6] => '31/08/2019',
                        $title[7] => 1
                      ],

                      ];
        DB::table('annee_academique')->insert($tableau);
    }
}
