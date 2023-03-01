<?php

namespace Corals\Modules\Places\Transformers;

use Corals\Foundation\Transformers\FractalPresenter;

class ImportPresenter extends FractalPresenter
{

    /**
     * @param array $extras
     * @return ImportTransformer|\League\Fractal\TransformerAbstract
     */
    public function getTransformer($extras = [])
    {
        return new ImportTransformer($extras);
    }
}
