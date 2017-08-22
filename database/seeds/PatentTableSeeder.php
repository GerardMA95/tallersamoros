<?php

use Illuminate\Database\Seeder;

class PatentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('patent')->get()->count() == 0){
            DB::table('patent')->insert([
                [
                    'id' => '1',
                    'name' => 'Honda',
                    'short_name' => 'honda',
                    'short_description' => 'Motosierras everywhere',
                    'description' => 'Motosierras everywhere Motosierras everywhere Motosierras everywhere',
                ],
                [
                    'id' => '2',
                    'name' => 'Echo',
                    'short_name' => 'echo',
                    'short_description' => 'Cortasetoss everywhere',
                    'description' => 'Cortasetoss everywhere Cortasetoss everywhere Cortasetoss everywhere',
                ],
                [
                    'id' => '3',
                    'name' => 'Pellenc',
                    'short_name' => 'pellenc',
                    'short_description' => 'Desbrozadorass everywhere',
                    'description' => 'Desbrozadorass everywhere Desbrozadorass everywhere Desbrozadorass everywhere',
                ],
                [
                    'id' => '4',
                    'name' => 'Barlieri',
                    'short_name' => 'barlieri',
                    'short_description' => 'Sopladorass everywhere',
                    'description' => 'Sopladorass everywhere Sopladorass everywhere Sopladorass everywhere',
                ],
                [
                    'id' => '5',
                    'name' => 'Benza',
                    'short_name' => 'benza',
                    'short_description' => 'Tijeras de podars everywhere',
                    'description' => 'Tijeras de podars everywhere Tijeras de podars everywhere Tijeras de podars everywhere',
                ],
                [
                    'id' => '6',
                    'name' => 'BriggsStratton',
                    'short_name' => 'briggStratton',
                    'short_description' => 'Vareadors everywhere',
                    'description' => 'Vareadors everywhere Vareadors everywhere Vareadors everywhere',
                ],
                [
                    'id' => '7',
                    'name' => 'Cifarelli',
                    'short_name' => 'cifarelli',
                    'short_description' => 'Bateriass everywhere',
                    'description' => 'Bateriass everywhere Bateriass everywhere Bateriass everywhere',
                ],
                [
                    'id' => '8',
                    'name' => 'Comanche',
                    'short_name' => 'comanche',
                    'short_description' => 'Tijeras para árboless everywhere',
                    'description' => 'Tijeras para árboless everywhere Tijeras para árboless everywhere Tijeras para árboless everywhere',
                ],
                [
                    'id' => '9',
                    'name' => 'Garland',
                    'short_name' => 'garland',
                    'short_description' => 'Atadoras everywhere',
                    'description' => 'Atadoras everywhere Atadoras everywhere Atadoras everywhere',
                ],
                [
                    'id' => '10',
                    'name' => 'Gesan',
                    'short_name' => 'gesan',
                    'short_description' => 'Desbrozadorass everywhere',
                    'description' => 'Desbrozadorass everywhere Desbrozadorass everywhere Desbrozadorass everywhere',
                ],
                [
                    'id' => '11',
                    'name' => 'Grillo',
                    'short_name' => 'grillo',
                    'short_description' => 'Sopladorass everywhere',
                    'description' => 'Sopladorass everywhere Sopladorass everywhere Sopladorass everywhere',
                ],
                [
                    'id' => '12',
                    'name' => 'Hitachi',
                    'short_name' => 'hitachi',
                    'short_description' => 'Tijeras de podars everywhere',
                    'description' => 'Tijeras de podars everywhere Tijeras de podars everywhere Tijeras de podars everywhere',
                ],
                [
                    'id' => '13',
                    'name' => 'Husqvarna',
                    'short_name' => 'husqvarna',
                    'short_description' => 'Vareadors everywhere',
                    'description' => 'Vareadors everywhere Vareadors everywhere Vareadors everywhere',
                ],
                [
                    'id' => '14',
                    'name' => 'Outils Wolf',
                    'short_name' => 'outilsWolf',
                    'short_description' => 'short description',
                    'description' => 'Description',
                ],
                [
                    'id' => '15',
                    'name' => 'Saher',
                    'short_name' => 'saher',
                    'short_description' => 'short description',
                    'description' => 'Description',
                ],
                [
                    'id' => '16',
                    'name' => 'Zanon',
                    'short_name' => 'zanon',
                    'short_description' => 'short description',
                    'description' => 'Description',
                ]
            ]);
        } else { echo "\e[31mTable patent is not empty, therefore NOT "; }
    }
}
