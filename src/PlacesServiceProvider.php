<?php

namespace Corals\Modules\Places;

use Corals\Foundation\Providers\BasePackageServiceProvider;
use Corals\Modules\Places\Console\Commands\RunImports;
use Corals\Modules\Places\Facades\Places;
use Corals\Modules\Places\Models\Import as Import;
use Corals\Modules\Places\Providers\PlacesAuthServiceProvider;
use Corals\Modules\Places\Providers\PlacesObserverServiceProvider;
use Corals\Modules\Places\Providers\PlacesRouteServiceProvider;
use Corals\Settings\Facades\Modules;
use Corals\Settings\Facades\Settings;
use Illuminate\Foundation\AliasLoader;

class PlacesServiceProvider extends BasePackageServiceProvider
{
    protected $defer = true;
    /**
     * @var
     */
    protected $packageCode = 'corals-google-places';

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function bootPackage()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'Places');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'Places');

        // Load migrations
        //        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->registerCustomFieldsModels();
        $this->registerCommand();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function registerPackage()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/places.php', 'places');

        $this->app->register(PlacesRouteServiceProvider::class);
        $this->app->register(PlacesAuthServiceProvider::class);
        $this->app->register(PlacesObserverServiceProvider::class);

        $this->app->booted(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Places', Places::class);
        });
    }

    protected function registerCustomFieldsModels()
    {
        Settings::addCustomFieldModel(Import::class);
    }

    protected function registerCommand()
    {
        $this->commands(RunImports::class);
    }

    public function registerModulesPackages()
    {
        Modules::addModulesPackages('corals/places');
    }
}
