<?php

use Illuminate\Database\Seeder;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('feature')->get()->count() == 0){
            DB::table('feature')->insert([
                [
                    'id' => '1',
                    'name' => 'GCV 160',
                    'description' => 'GCV160',
                    'id_feature_category' => '1',
                ],
                [
                    'id' => '2',
                    'name' => 'GCV 190',
                    'description' => 'GCV160',
                    'id_feature_category' => '1',
                ],
                [
                    'id' => '3',
                    'name' => 'Bolsa de tela',
                    'description' => 'Bola de tela',
                    'id_feature_category' => '2',
                ],
                [
                    'id' => '4',
                    'name' => '1500 m2',
                    'description' => 'Se aconseja en superficies de 1500m2',
                    'id_feature_category' => '3',
                ],
                [
                    'id' => '5',
                    'name' => 'Acero',
                    'description' => 'Chásis de acero',
                    'id_feature_category' => '4',
                ],
                [
                    'id' => '6',
                    'name' => '53cm de corte',
                    'description' => 'Ancho de corte de 53cm',
                    'id_feature_category' => '5',
                ],
                /* Cilindrada*/
                [
                    'id' => '7',
                    'name' => '25.00',
                    'description' => '25,00 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '9',
                    'name' => '26.90',
                    'description' => '26,90 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '12',
                    'name' => '30.50',
                    'description' => '30,50 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '10',
                    'name' => '32.30',
                    'description' => '32,30 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '18',
                    'name' => '34.00',
                    'description' => '34,00 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '13',
                    'name' => '34.40',
                    'description' => '34,40 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '11',
                    'name' => '35.80',
                    'description' => '35,80 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '17',
                    'name' => '38.40',
                    'description' => '38,40 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '14',
                    'name' => '40.20',
                    'description' => '40,20 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '15',
                    'name' => '50.20',
                    'description' => '50,20 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '16',
                    'name' => '59.80',
                    'description' => '59,80 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '19',
                    'name' => '21.20',
                    'description' => '21,20 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '20',
                    'name' => '25.40',
                    'description' => '25,40 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '21',
                    'name' => '41.50',
                    'description' => '41,50 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '22',
                    'name' => '34.30',
                    'description' => '34,30 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '23',
                    'name' => '51.70',
                    'description' => '51,70 c.c.',
                    'id_feature_category' => '6',
                ],
                [
                    'id' => '24',
                    'name' => '58.20',
                    'description' => '58,20 c.c.',
                    'id_feature_category' => '6',
                ],

                /* Peso */
                [
                    'id' => '8',
                    'name' => '2,3 Kg',
                    'description' => '2,3 Kg',
                    'id_feature_category' => '7',
                ]
            ]);
        } else { echo "\e[31mTable feature is not empty, therefore NOT "; }
    }
}
