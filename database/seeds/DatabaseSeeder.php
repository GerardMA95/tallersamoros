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
        $this->call(FeatureTableSeeder::class);
        $this->call(ItemFeatureTableSeeder::class);
    }
}
