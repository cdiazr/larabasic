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
        $settings = [[
                'key' => 'chatbot',
                'value' => 0,
            ], [
                'key' => 'maintenance',
                'value' => 0,
            ], [
                'key' => 'master',
                'value' => 0,
            ], [
                'key' => 'target',
                'value' => null,
            ], [
                'key' => 'languages',
                'value' => 0,
            ], [
                'key' => 'sidebar_color',
                'value' => 'bg-default',
            ], [
                'key' => 'navbar_color',
                'value' => 'bg-white',
            ], [
                'key' => 'footer_fix',
                'value' => 0
            ]
        ];

        foreach($settings as $setting)
            Setting::create($setting);
    }
}
