<?php

namespace Corals\Modules\Places\Providers;

use Corals\Modules\Places\Models\Import;
use Corals\Modules\Places\Observers\ImportObserver;
use Illuminate\Support\ServiceProvider;

class PlacesObserverServiceProvider extends ServiceProvider
{
    /**
     * Register Observers
     */
    public function boot()
    {

        Import::observe(ImportObserver::class);
    }
}
