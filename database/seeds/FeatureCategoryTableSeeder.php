<?php

use Illuminate\Database\Seeder;

class FeatureCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('feature_category')->get()->count() == 0){
            DB::table('feature_category')->insert([
                [
                    'id' => '1',
                    'name' => 'Motor',
                    'short_name' => 'motor',
                    'short_description' => 'Motor everywhere',
                    'description' => 'Motor',
                ],
                [
                    'id' => '2',
                    'name' => 'Bolsa',
                    'short_name' => 'bolsa',
                    'short_description' => 'Cortasetoss everywhere',
                    'description' => 'Cortasetoss everywhere Cortasetoss everywhere Cortasetoss everywhere',
                ],
                [
                    'id' => '3',
                    'name' => 'Superficie',
                    'short_name' => 'superficie',
                    'short_description' => 'Desbrozadorass everywhere',
                    'description' => 'Desbrozadorass everywhere Desbrozadorass everywhere Desbrozadorass everywhere',
                ],
                [
                    'id' => '4',
                    'name' => 'Material chasis',
                    'short_name' => 'materialChasis',
                    'short_description' => 'Sopladorass everywhere',
                    'description' => 'Sopladorass everywhere Sopladorass everywhere Sopladorass everywhere',
                ],
                [
                    'id' => '5',
                    'name' => 'Ancho de corte',
                    'short_name' => 'AnchoDeCorte',
                    'short_description' => 'Tijeras de podars everywhere',
                    'description' => 'Tijeras de podars everywhere Tijeras de podars everywhere Tijeras de podars everywhere',
                ],
                [
                    'id' => '6',
                    'name' => 'Cilindrada',
                    'short_name' => 'cilindrada',
                    'short_description' => 'short_description',
                    'description' => 'Description',
                ],
                [
                    'id' => '7',
                    'name' => 'Peso',
                    'short_name' => 'peso',
                    'short_description' => 'short_description',
                    'description' => 'Description',
                ],
                [
                    'id' => '8',
                    'name' => 'Long. Espada',
                    'short_name' => 'longEspada',
                    'short_description' => 'short_description',
                    'description' => 'Description',
                ],
                [
                    'id' => '9',
                    'name' => 'Cap. Bolsa',
                    'short_name' => 'capBolsa',
                    'short_description' => 'short_description',
                    'description' => 'Description',
                ],
                [
                    'id' => '10',
                    'name' => 'Apertura de cuchilla',
                    'short_name' => 'aperturaCuchilla',
                    'short_description' => 'short_description',
                    'description' => 'Description',
                ],
                [
                    'id' => '11',
                    'name' => 'Vel. Motor',
                    'short_name' => 'velMotor',
                    'short_description' => 'short_description',
                    'description' => 'Description',
                ],
                [
                    'id' => '12',
                    'name' => 'Potencia Máx.',
                    'short_name' => 'potenciaMax',
                    'short_description' => 'short_description',
                    'description' => 'Description',
                ],
                [
                    'id' => '13',
                    'name' => 'Pértiga',
                    'short_name' => 'pertiga',
                    'short_description' => 'short_description',
                    'description' => 'Description',
                ]
                ,
                [
                    'id' => '14',
                    'name' => 'Longitud',
                    'short_name' => 'longitud',
                    'short_description' => 'short_description',
                    'description' => 'Description',
                ]
            ]);
        } else { echo "\e[31mTable feature_category is not empty, therefore NOT "; }
    }
}
