<?php

namespace BrianFaust\Settingable;

use Illuminate\Support\ServiceProvider;

class LaravelSettingableServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (!class_exists('CreateSettingsTable')) {
            $this->publishes([
                __DIR__ . '/../database/migrations/create_settings_table.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_settings_table.php'),
            ], 'migrations');
        }
    }

    public function boot()
    {

    }
}
