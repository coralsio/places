<?php

namespace Corals\Modules\Places\Models;

use Corals\Foundation\Models\BaseModel;
use Corals\Foundation\Transformers\PresentableTrait;
use Corals\Modules\Directory\Models\Listing;
use Corals\Modules\Utility\Location\Models\Location;
use Spatie\Activitylog\Traits\LogsActivity;

class Import extends BaseModel
{
    use PresentableTrait, LogsActivity;

    /**
     *  Model configuration.
     * @var string
     */
    public $config = 'places.models.import';

    protected $table = 'places_imports';

    protected $guarded = ['id'];

    protected $casts = [];

    public function type()
    {
        return $this->belongsTo(PlacesType::class);
    }

    public function listings()
    {
        return $this->belongsToMany(Listing::class, 'places_import_listing');
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }


    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

}
