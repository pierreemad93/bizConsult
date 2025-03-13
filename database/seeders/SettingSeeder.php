<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Setting::updateOrCreate(['id' => 1], [
            'address' => 'Address 1',
            'phone' => '1234567',
            'email' => 'info@info.com'
        ]);
    }
}
