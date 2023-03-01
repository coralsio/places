<?php

namespace Corals\Modules\Places\Http\Controllers;

use Corals\Foundation\Http\Controllers\BaseController;
use Corals\Modules\Places\DataTables\ImportsDataTable;
use Corals\Modules\Places\Http\Requests\ImportRequest;
use Corals\Modules\Places\Models\Import;

class ImportsController extends BaseController
{
    protected $excludedRequestParams = [];

    public function __construct()
    {
        $this->resource_url = config('places.models.import.resource_url');

        $this->resource_model = new Import();

        $this->title = 'Places::module.import.title';
        $this->title_singular = 'Places::module.import.title_singular';

        parent::__construct();
    }

    /**
     * @param ImportRequest $request
     * @param ImportsDataTable $dataTable
     * @return mixed
     */
    public function index(ImportRequest $request, ImportsDataTable $dataTable)
    {
        return $dataTable->render('Places::imports.index');
    }

    /**
     * @param ImportRequest $request
     * @return $this
     */
    public function create(ImportRequest $request)
    {
        $import = new Import();

        $this->setViewSharedData(['title_singular' => trans('Corals::labels.create_title', ['title' => $this->title_singular])]);

        return view('Places::imports.create_edit')->with(compact('import'));
    }

    /**
     * @param ImportRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ImportRequest $request)
    {
        try {
            $data = $request->except($this->excludedRequestParams);

            $import = Import::create($data);

            flash(trans('Corals::messages.success.created', ['item' => $this->title_singular]))->success();
        } catch (\Exception $exception) {
            log_exception($exception, Import::class, 'store');
        }

        return redirectTo($this->resource_url);
    }

    /**
     * @param ImportRequest $request
     * @param Import $import
     * @return Import
     */
    public function show(ImportRequest $request, Import $import)
    {
        $this->setViewSharedData(['title_singular' => trans('Corals::labels.show_title', ['title' => $import->title])]);

        $this->setViewSharedData(['edit_url' => $this->resource_url . '/' . $import->hashed_id . '/edit']);

        return view('Places::imports.show')->with(compact('import'));
    }

    /**
     * @param ImportRequest $request
     * @param Import $import
     * @return $this
     */
    public function edit(ImportRequest $request, Import $import)
    {
        $this->setViewSharedData(['title_singular' => trans('Corals::labels.update_title', ['title' => $import->title])]);

        return view('Places::imports.create_edit')->with(compact('import'));
    }

    /**
     * @param ImportRequest $request
     * @param Import $import
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ImportRequest $request, Import $import)
    {
        try {
            $data = $request->except($this->excludedRequestParams);

            $import->update($data);

            flash(trans('Corals::messages.success.updated', ['item' => $this->title_singular]))->success();
        } catch (\Exception $exception) {
            log_exception($exception, Import::class, 'update');
        }

        return redirectTo($this->resource_url);
    }

    /**
     * @param ImportRequest $request
     * @param Import $import
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(ImportRequest $request, Import $import)
    {
        try {
            $import->delete();

            $message = ['level' => 'success', 'message' => trans('Corals::messages.success.deleted', ['item' => $this->title_singular])];
        } catch (\Exception $exception) {
            log_exception($exception, Import::class, 'destroy');
            $message = ['level' => 'error', 'message' => $exception->getMessage()];
        }

        return response()->json($message);
    }
}
