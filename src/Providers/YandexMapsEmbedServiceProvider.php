<?php

namespace Tarik02\YandexMapsEmbed\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class YandexMapsEmbedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('yandexMap', function($expression){
            return '<?php echo yandex_map_make(' . $expression . '); ?>';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Tarik02\YandexMapsEmbed\Contracts\YandexMapEmbed::class, \Tarik02\YandexMapsEmbed\YandexMapEmbed::class);
        $this->app->alias(\Tarik02\YandexMapsEmbed\Contracts\YandexMapEmbed::class, 'yandex-map-embed');
    }
}
