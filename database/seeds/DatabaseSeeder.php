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
        $this->call(FeatureTablePesoSeeder::class);
        $this->call(FeatureTableAnchCorteAndLongEspadaSeeder::class);
        $this->call(FeatureTableCilindradaSeeder::class);
        $this->call(FeatureTableAperturaCuchillaSeeder::class);
        $this->call(FeatureTableVelMotorSeeder::class);
        $this->call(FeatureTablePotenciaMaxSeeder::class);
        $this->call(FeatureTablePertigaAndLongitudSeeder::class);
        $this->call(ItemFeatureTableSeeder::class);
    }
}
