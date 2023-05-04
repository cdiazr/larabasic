<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Setting;
use Illuminate\Support\Facades\Hash;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key' => 'maintenance',
            'value' => '0',

        ]);
        Setting::create([
            'key' => 'master',
            'value' => '0',
        ]);

        Setting::create([
            'key' => 'target',
            'value' => null,
        ]);

        Setting::create([
            'key' => 'languages',
            'value' => '0',
        ]);

        Setting::create([
            'key' => 'sidebar_color',
            'value' => 'bg-default',
        ]);

        Setting::create([
            'key' => 'navbar_color',
            'value' => 'bg-white',
        ]);

        Setting::create([
            'key' => 'footer_fix',
            'value' => '0'
        ]);
    }
}
