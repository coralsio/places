<?php

namespace Corals\Modules\Places\Providers;

use Corals\Foundation\Providers\BaseInstallModuleServiceProvider;
use Corals\Modules\Places\database\migrations\PlacesTables;
use Corals\Modules\Places\database\seeds\PlacesDatabaseSeeder;

class InstallModuleServiceProvider extends BaseInstallModuleServiceProvider
{
    protected $module_public_path = __DIR__ . '/../public';

    protected $migrations = [
        PlacesTables::class,
    ];

    protected function providerBooted()
    {
        $this->createSchema();

        $placesDatabaseSeeder = new PlacesDatabaseSeeder();

        $placesDatabaseSeeder->run();
    }
}
