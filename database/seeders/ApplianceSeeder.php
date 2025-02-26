<?php

namespace Database\Seeders;

use App\Models\Appliance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appliance::factory()->count(15)->create();
    }
}
