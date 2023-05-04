<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class GlobalVariablesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $flag = Schema::hasTable('settings');
        if($flag) {
            $settings = $this->buildArraySettings();
            View::composer('*', function ($view) use($settings) {
                $view->with('setting_maintenance', $settings['maintenance']);
                $view->with('setting_master', $settings['master']);
                $view->with('setting_account_target', $settings['target']);
                $view->with('setting_languages', $settings['languages']);
                $view->with('setting_footer', $settings['footer_fix']);
                $view->with('setting_navbar_color', $settings['navbar_color']);
                $view->with('setting_sidebar_color', $settings['sidebar_color']);
            });
        }
    }

    private function buildArraySettings()
    {
        $array = [];
        $settings = Setting::all();
        foreach ($settings as $row)
            $array[$row['key']] = $row['value'];

        return $array;
    }
}
