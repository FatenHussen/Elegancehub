<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['title' => 'Heart Surgery', 'description' => 'A surgery to treat heart conditions', 'department_id' => 1],
            ['title' => 'Brain Surgery', 'description' => 'Surgery to treat brain conditions', 'department_id' => 2],
            ['title' => 'Knee Replacement', 'description' => 'Surgery to replace the knee joint', 'department_id' => 3],
        ]);
    }
}
