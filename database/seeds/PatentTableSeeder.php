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
                    'short_description' => 'El poder de los sueños',
                    'description' => 'Honda',
                ],
                [
                    'id' => '2',
                    'name' => 'Echo',
                    'short_name' => 'echo',
                    'short_description' => 'Maquinaria forestal y jardineria',
                    'description' => 'Echo',
                ],
                [
                    'id' => '3',
                    'name' => 'Pellenc',
                    'short_name' => 'pellenc',
                    'short_description' => 'Agricultura especializada',
                    'description' => 'El éxito del Grupo PELLENC se basa, desde hace más de 40 años, en una política de innovación continua y en la integración de las exigencias medioambientales que lo han convertido en uno de los principales agentes en el sector de las máquinas, equipos y herramientas para la agricultura especializada.',
                ],
                // [
                //     'id' => '4',
                //     'name' => 'Barlieri',
                //     'short_name' => 'barlieri',
                //     'short_description' => 'Maquinaria agrícola',
                //     'description' => 'Maquinaria agrícola',
                // ],
                [
                    'id' => '5',
                    'name' => 'Benza',
                    'short_name' => 'benza',
                    'short_description' => 'Benza',
                    'description' => 'Benza',
                ],
                [
                    'id' => '6',
                    'name' => 'Briggs & Stratton',
                    'short_name' => 'briggsStratton',
                    'short_description' => 'BriggsStratton',
                    'description' => 'BriggsStratton',
                ],
                [
                    'id' => '7',
                    'name' => 'Cifarelli',
                    'short_name' => 'cifarelli',
                    'short_description' => 'Cifarelli',
                    'description' => 'Cifarelli',
                ],
                // [
                //     'id' => '8',
                //     'name' => 'Comanche',
                //     'short_name' => 'comanche',
                //     'short_description' => 'Comanche',
                //     'description' => 'Comanche',
                // ],
                // [
                //     'id' => '9',
                //     'name' => 'Garland',
                //     'short_name' => 'garland',
                //     'short_description' => 'Garland',
                //     'description' => 'Garland',
                // ],
                // [
                //     'id' => '10',
                //     'name' => 'Gesan',
                //     'short_name' => 'gesan',
                //     'short_description' => 'Gesan',
                //     'description' => 'Gesan',
                // ],
                // [
                //     'id' => '11',
                //     'name' => 'Grillo',
                //     'short_name' => 'grillo',
                //     'short_description' => 'Grillo',
                //     'description' => 'Grillo',
                // ],
                [
                    'id' => '12',
                    'name' => 'Hitachi',
                    'short_name' => 'hitachi',
                    'short_description' => 'Hitachi',
                    'description' => 'Hitachi',
                ],
                [
                    'id' => '13',
                    'name' => 'Husqvarna',
                    'short_name' => 'husqvarna',
                    'short_description' => 'Husqvarna',
                    'description' => 'Husqvarna',
                ],
                [
                    'id' => '14',
                    'name' => 'Outils Wolf',
                    'short_name' => 'outilsWolf',
                    'short_description' => 'Outils Wolf',
                    'description' => 'Outils Wolf',
                ],
                [
                    'id' => '15',
                    'name' => 'Saher',
                    'short_name' => 'saher',
                    'short_description' => 'Saher',
                    'description' => 'Saher',
                ],
                [
                    'id' => '16',
                    'name' => 'Zanon',
                    'short_name' => 'zanon',
                    'short_description' => 'Zanon',
                    'description' => 'Zanon',
                ]
            ]);
        } else { echo "\e[31mTable patent is not empty, therefore NOT "; }
    }
}
