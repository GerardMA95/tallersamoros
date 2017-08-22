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
                    'short_description' => 'Motosierras everywhere',
                    'description' => 'Motosierras everywhere Motosierras everywhere Motosierras everywhere',
                ],
                [
                    'id' => '2',
                    'name' => 'Cortasetos',
                    'short_name' => 'cortasetos',
                    'short_description' => 'Cortasetoss everywhere',
                    'description' => 'Cortasetoss everywhere Cortasetoss everywhere Cortasetoss everywhere',
                ],
                [
                    'id' => '3',
                    'name' => 'Desbrozadoras',
                    'short_name' => 'desbrozadoras',
                    'short_description' => 'Desbrozadorass everywhere',
                    'description' => 'Desbrozadorass everywhere Desbrozadorass everywhere Desbrozadorass everywhere',
                ],
                [
                    'id' => '4',
                    'name' => 'Sopladoras',
                    'short_name' => 'sopladoras',
                    'short_description' => 'Sopladorass everywhere',
                    'description' => 'Sopladorass everywhere Sopladorass everywhere Sopladorass everywhere',
                ],
                [
                    'id' => '5',
                    'name' => 'Tijeras',
                    'short_name' => 'tijeras',
                    'short_description' => 'Tijeras de podars everywhere',
                    'description' => 'Tijeras de podars everywhere Tijeras de podars everywhere Tijeras de podars everywhere',
                ],
                [
                    'id' => '6',
                    'name' => 'Vareadores',
                    'short_name' => 'vareadores',
                    'short_description' => 'Vareadors everywhere',
                    'description' => 'Vareadors everywhere Vareadors everywhere Vareadors everywhere',
                ],
                [
                    'id' => '7',
                    'name' => 'Baterias',
                    'short_name' => 'baterias',
                    'short_description' => 'Bateriass everywhere',
                    'description' => 'Bateriass everywhere Bateriass everywhere Bateriass everywhere',
                ],
                [
                    'id' => '8',
                    'name' => 'Atadoras',
                    'short_name' => 'atadoras',
                    'short_description' => 'Atadoras everywhere',
                    'description' => 'Atadoras everywhere Atadoras everywhere Atadoras everywhere',
                ],
                [
                    'id' => '9',
                    'name' => 'Cultivadores',
                    'short_name' => 'cultivador',
                    'short_description' => 'Desbrozadorass everywhere',
                    'description' => 'Desbrozadorass everywhere Desbrozadorass everywhere Desbrozadorass everywhere',
                ],
                [
                    'id' => '10',
                    'name' => 'Cortacesped',
                    'short_name' => 'cortacesped',
                    'short_description' => 'short description',
                    'description' => 'Description',
                ],
                [
                    'id' => '11',
                    'name' => 'Ahoyadores',
                    'short_name' => 'ahoyadores',
                    'short_description' => 'Tijeras de podars everywhere',
                    'description' => 'Tijeras de podars everywhere Tijeras de podars everywhere Tijeras de podars everywhere',
                ],
                [
                    'id' => '12',
                    'name' => 'Aspiradores',
                    'short_name' => 'aspiradores',
                    'short_description' => 'Vareadors everywhere',
                    'description' => 'Vareadors everywhere Vareadors everywhere Vareadors everywhere',
                ],
                [
                    'id' => '13',
                    'name' => 'Astilladoras',
                    'short_name' => 'astilladoras',
                    'short_description' => 'short description',
                    'description' => 'Description',
                ],
                [
                    'id' => '14',
                    'name' => 'Atomizadores',
                    'short_name' => 'atomizadores',
                    'short_description' => 'short description',
                    'description' => 'Description',
                ],
                [
                    'id' => '15',
                    'name' => 'Barredoras',
                    'short_name' => 'barredoras',
                    'short_description' => 'short description',
                    'description' => 'Description',
                ],
                [
                    'id' => '16',
                    'name' => 'Regeneradores',
                    'short_name' => 'regeneradores',
                    'short_description' => 'short description',
                    'description' => 'Description',
                ]
                // [
                //     'name' => 'Biotrituradoras',
                //     'short_description' => 'short description',
                //     'description' => 'Description',
                // ],
                // [
                //     'name' => 'Generadores',
                //     'short_description' => 'short description',
                //     'description' => 'Description',
                // ],
                // [
                //     'name' => 'Calentadores',
                //     'short_description' => 'short description',
                //     'description' => 'Description',
                // ],
                // [
                //     'name' => 'Carretillas motorizadas',
                //     'short_description' => 'short description',
                //     'description' => 'Description',
                // ],
                // [
                //     'name' => 'Electrobombas',
                //     'short_description' => 'short description',
                //     'description' => 'Description',
                // ],
                // [
                //     'name' => 'Escarificadores',
                //     'short_description' => 'short description',
                //     'description' => 'Description',
                // ],
                // [
                //     'name' => 'Herramientas',
                //     'short_description' => 'short description',
                //     'description' => 'Description',
                // ]
            ]);
        } else { echo "\e[31mTable category is not empty, therefore NOT "; }

    }
}
