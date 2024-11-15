<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\City;
use App\Models\POS;
use App\Models\SystemVariable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name_ar' => 'دمشق',
                'name_en' => 'Damascus',
            ],
            [
                'name_ar' => 'حمص',
                'name_en' => 'Homs',
            ],
            [
                'name_ar' => 'طرطوس',
                'name_en' => 'Tartous',
            ],
            [
                'name_ar' => 'حلب',
                'name_en' => 'Aleppo',
            ]
        ];

        foreach ($data as $item) {
            City::create($item);
        }
    }
}
