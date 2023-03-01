<?php

namespace Corals\Modules\Places\DataTables;

use Corals\Foundation\DataTables\BaseDataTable;
use Corals\Modules\Places\Models\Import;
use Corals\Modules\Places\Transformers\ImportTransformer;
use Yajra\DataTables\EloquentDataTable;

class ImportsDataTable extends BaseDataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $this->setResourceUrl(config('places.models.import.resource_url'));

        $dataTable = new EloquentDataTable($query);

        return $dataTable->setTransformer(new ImportTransformer());
    }

    /**
     * Get query source of dataTable.
     * @param Import $model
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function query(Import $model)
    {
        return $model->newQuery();
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => ['visible' => false],
            'title' => ['title' => trans('Places::attributes.import.title')],
            'status' => ['title' => trans('Corals::attributes.status')],
            'keyword' => ['title' => trans('Places::attributes.import.keyword')],
            'imported_listings_count' => ['title' => trans('Places::attributes.import.imported_listings_count')],
            'type_id' => ['title' => trans('Places::attributes.import.type')],
            'created_at' => ['title' => trans('Corals::attributes.created_at')],
            'updated_at' => ['title' => trans('Corals::attributes.updated_at')],
        ];
    }
}
