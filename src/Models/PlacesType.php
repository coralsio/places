<?php

namespace Corals\Modules\Places\Models;

use Corals\Foundation\Models\BaseModel;
use Spatie\Activitylog\Traits\LogsActivity;

class PlacesType extends BaseModel
{
    use  LogsActivity;

    /**
     *  Model configuration.
     * @var string
     */
    public $config = 'places.models.places_type';

    protected $table = 'places_types';

    protected $guarded = ['id'];

    protected $casts = [];

    public function imports()
    {
        return $this->hasMany(Import::class, 'places_type_import');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
