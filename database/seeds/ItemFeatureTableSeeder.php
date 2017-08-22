<?php

use Illuminate\Database\Seeder;

class ItemFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('item_feature')->get()->count() == 0){
            DB::table('item_feature')->insert([
                /* MOTOSIERRA - CILINDRADA */
                /* ECHO */
                [
                    'id_item' => '28',
                    'id_feature' => '7'
                ],
                [
                    'id_item' => '29',
                    'id_feature' => '7'
                ],
                [
                    'id_item' => '30',
                    'id_feature' => '9'
                ],
                [
                    'id_item' => '31',
                    'id_feature' => '9'
                ],
                [
                    'id_item' => '32',
                    'id_feature' => '9'
                ],
                [
                    'id_item' => '33',
                    'id_feature' => '9'
                ],
                [
                    'id_item' => '34',
                    'id_feature' => '10'
                ],
                [
                    'id_item' => '35',
                    'id_feature' => '11'
                ],
                [
                    'id_item' => '36',
                    'id_feature' => '12'
                ],
                [
                    'id_item' => '37',
                    'id_feature' => '18'
                ],
                [
                    'id_item' => '38',
                    'id_feature' => '11'
                ],
                [
                    'id_item' => '39',
                    'id_feature' => '14'
                ],
                [
                    'id_item' => '40',
                    'id_feature' => '15'
                ],
                [
                    'id_item' => '41',
                    'id_feature' => '15'
                ],
                [
                    'id_item' => '42',
                    'id_feature' => '16'
                ],
                [
                    'id_item' => '43',
                    'id_feature' => '16'
                ],
                [
                    'id_item' => '44',
                    'id_feature' => '17'
                ],
                [
                    'id_item' => '45',
                    'id_feature' => '15'
                ],
                [
                    'id_item' => '46',
                    'id_feature' => '15'
                ],
                [
                    'id_item' => '47',
                    'id_feature' => '16'
                ],
                [
                    'id_item' => '61',
                    'id_feature' => '16'
                ]
                /* DESBROZADORA - CILINDRADA */
                /* ECHO */
                ,[
                    'id_item' => '62',
                    'id_feature' => '19'
                ],
                [
                    'id_item' => '63',
                    'id_feature' => '19'
                ],
                [
                    'id_item' => '64',
                    'id_feature' => '20'
                ],
                [
                    'id_item' => '65',
                    'id_feature' => '20'
                ],
                [
                    'id_item' => '66',
                    'id_feature' => '20'
                ],
                [
                    'id_item' => '67',
                    'id_feature' => '20'
                ],
                [
                    'id_item' => '68',
                    'id_feature' => '21'
                ],
                [
                    'id_item' => '69',
                    'id_feature' => '22'
                ],
                [
                    'id_item' => '70',
                    'id_feature' => '21'
                ],
                [
                    'id_item' => '71',
                    'id_feature' => '15'
                ],
                [
                    'id_item' => '72',
                    'id_feature' => '23'
                ],
                [
                    'id_item' => '73',
                    'id_feature' => '24'
                ],
                [
                    'id_item' => '74',
                    'id_feature' => '15'
                ]
            ]);
        } else { echo "\e[31mTable item_feature is not empty, therefore NOT "; }
    }
}
