<?php

namespace Corals\Modules\Places\Providers;

use Corals\Foundation\Providers\BaseUninstallModuleServiceProvider;
use Corals\Modules\Places\database\migrations\PlacesTables;
use Corals\Modules\Places\database\seeds\PlacesDatabaseSeeder;

class UninstallModuleServiceProvider extends BaseUninstallModuleServiceProvider
{
    protected $migrations = [
        PlacesTables::class
    ];

    protected function providerBooted()
    {
        $this->dropSchema();

        $placesDatabaseSeeder = new PlacesDatabaseSeeder();

        $placesDatabaseSeeder->rollback();
    }
}
