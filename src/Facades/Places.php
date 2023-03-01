<?php

namespace Corals\Modules\Places\Facades;

use Illuminate\Support\Facades\Facade;

class Places extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return \Corals\Modules\Places\Classes\Places::class;
    }
}
