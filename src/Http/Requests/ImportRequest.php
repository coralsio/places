<?php

namespace Corals\Modules\Places\Http\Requests;

use Corals\Foundation\Http\Requests\BaseRequest;
use Corals\Modules\Places\Models\Import;

class ImportRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->setModel(Import::class);

        return $this->isAuthorized();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->setModel(Import::class);
        $rules = parent::rules();

        if ($this->isUpdate() || $this->isStore()) {
            $rules = array_merge($rules, [
                'status' => 'required|max:191',
                'max_result_pages' => 'required',
                'image_count' => 'required',
                'location_id' => 'required',
                'category_id' => 'required',
                'radius' => 'required|numeric',
            ]);
        }

        if ($this->isStore()) {
            $rules = array_merge($rules, [
                'title' => 'required|max:191|unique:places_imports,title',
            ]);
        }

        if ($this->isUpdate()) {
            $import = $this->route('import');

            $rules = array_merge($rules, [
                'title' => 'required|max:191|unique:places_imports,title,' . $import->id,
            ]);
        }

        return $rules;
    }
}
