<?php

namespace Corals\Modules\Places\Classes;

use Corals\Modules\Places\Models\PlacesType;

class Places
{
    /**
     * Places constructor.
     */
    function __construct()
    {
    }

    /**
     * @return array|mixed
     */
    public function getPlacesTypes()
    {
        return PlacesType::active()->pluck('name', 'id')->toArray();

    }
}
