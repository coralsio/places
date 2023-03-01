<?php

namespace Corals\Modules\Places\Transformers;

use Corals\Foundation\Transformers\BaseTransformer;
use Corals\Modules\Places\Models\Import;

class ImportTransformer extends BaseTransformer
{
    public function __construct($extras = [])
    {
        $this->resource_url = config('places.models.import.resource_url');

        parent::__construct($extras);
    }

    /**
     * @param Import $import
     * @return array
     * @throws \Throwable
     */
    public function transform(Import $import)
    {

        $levels = [
            'pending' => 'info',
            'in_progress' => 'success',
            'completed' => 'primary',
            'failed' => 'danger',
            'canceled' => 'warning'
        ];

        $show_url = url($this->resource_url . '/' . $import->hashed_id);

        $transformedArray = [
            'id' => $import->id,
            'title' => '<a href="' . $show_url . '">' . \Str::limit($import->title, 50) . '</a>',
            'status' => formatStatusAsLabels($import->status, ['level' => $levels[$import->status], 'text' => trans('Places::attributes.import.status_options.' . $import->status)]),
            'type_id' => $import->type->name,
            'keyword' => $import->keyword,
            'imported_listings_count' => $import->listings->count(),
            'created_at' => format_date($import->created_at),
            'updated_at' => format_date($import->updated_at),
            'action' => $this->actions($import)
        ];

        return parent::transformResponse($transformedArray);
    }
}
