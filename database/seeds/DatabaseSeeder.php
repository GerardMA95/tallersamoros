<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(PatentTableSeeder::class);
        $this->call(FeatureCategoryTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(FeaturePesoTableSeeder::class);
        $this->call(FeatureAnchCorteAndLongEspadaTableSeeder::class);
        $this->call(FeatureCilindradaTableSeeder::class);
        $this->call(FeatureAperturaCuchillaTableSeeder::class);
        $this->call(FeatureVelMotorTableSeeder::class);
        $this->call(FeaturePotenciaMaxTableSeeder::class);
        $this->call(FeaturePertigaAndLongitudTableSeeder::class);
        $this->call(ItemFeatureTableSeeder::class);
    }
}
