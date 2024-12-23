<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assets = array(
            ['name' => 'Mouse'],
            ['name' => 'Keyboard'],
            ['name' => 'Monitor'],
            ['name' => 'CPU'],
            ['name' => 'Water Bottle'],
            ['name' => 'Tissue Paper'],
            ['name' => 'Table Fan'],
        );
            

        Asset::create($assets);
    }
}
