<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            ['date' => Carbon::now()->addDays(1), 'user_id' => 1, 'doctor_id' => 1],
            ['date' => Carbon::now()->addDays(2), 'user_id' => 2, 'doctor_id' => 2],
            ['date' => Carbon::now()->addDays(3), 'user_id' => 3, 'doctor_id' => 3],
        ]);
    }
}
