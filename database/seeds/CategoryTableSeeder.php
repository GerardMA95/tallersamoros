<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('category')->get()->count() == 0){
            DB::table('category')->insert([
                [
                    'id' => '1',
                    'name' => 'Motosierras',
                    'short_name' => 'motosierras',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '2',
                    'name' => 'Cortasetos',
                    'short_name' => 'cortasetos',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '3',
                    'name' => 'Desbrozadoras',
                    'short_name' => 'desbrozadoras',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '4',
                    'name' => 'Sopladoras',
                    'short_name' => 'sopladoras',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '5',
                    'name' => 'Tijeras',
                    'short_name' => 'tijeras',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '6',
                    'name' => 'Vareadores',
                    'short_name' => 'vareadores',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '7',
                    'name' => 'Baterias',
                    'short_name' => 'baterias',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '8',
                    'name' => 'Atadoras',
                    'short_name' => 'atadoras',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '9',
                    'name' => 'Cultivadores',
                    'short_name' => 'cultivador',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '10',
                    'name' => 'Cortacesped',
                    'short_name' => 'cortacesped',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '11',
                    'name' => 'Ahoyadores',
                    'short_name' => 'ahoyadores',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '12',
                    'name' => 'Aspiradores',
                    'short_name' => 'aspiradores',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '13',
                    'name' => 'Astilladoras',
                    'short_name' => 'astilladoras',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '14',
                    'name' => 'Atomizadores',
                    'short_name' => 'atomizadores',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '15',
                    'name' => 'Barredoras',
                    'short_name' => 'barredoras',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '16',
                    'name' => 'Regeneradores',
                    'short_name' => 'regeneradores',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '17',
                    'name' => 'Aspiradores',
                    'short_name' => 'aspiradores',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '18',
                    'name' => 'Cargadores',
                    'short_name' => 'cargadores',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '19',
                    'name' => 'Motoazadas',
                    'short_name' => 'motoazadas',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '20',
                    'name' => 'Motobombas',
                    'short_name' => 'motobombas',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '21',
                    'name' => 'Biotrituradoras',
                    'short_name' => 'biotrituradoras',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '22',
                    'name' => 'Generadores',
                    'short_name' => 'generadores',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '23',
                    'name' => 'Carretillas',
                    'short_name' => 'carretillas',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '24',
                    'name' => 'Hidrolimpiadores',
                    'short_name' => 'hidrolimpiadores',
                    'short_description' => '',
                    'description' => '',
                ],
                [
                    'id' => '25',
                    'name' => 'Scooter',
                    'short_name' => 'scooter',
                    'short_description' => '',
                    'description' => '',
                ],
                // [
                //     'name' => 'Escarificadores',
                //     'short_description' => '',
                //     'description' => '',
                // ],
                // [
                //     'name' => 'Herramientas',
                //     'short_description' => '',
                //     'description' => '',
                // ]
            ]);
        } else { echo "\e[31mTable category is not empty, therefore NOT "; }

    }
}
