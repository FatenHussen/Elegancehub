<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            ['name' => 'Dr. John Doe', 'email' => 'john.doe@example.com', 'service_id' => 1],
            ['name' => 'Dr. Jane Smith', 'email' => 'jane.smith@example.com', 'service_id' => 2],
            ['name' => 'Dr. Mary Johnson', 'email' => 'mary.johnson@example.com', 'service_id' => 3],
        ]);
    }
}
