<?php

namespace Database\Seeders;

use App\Models\RecordOfEmployee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordOfEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecordOfEmployee::factory(20)->create();
    }
}
