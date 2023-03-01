@extends('layouts.crud.create_edit')



@section('content_header')
    @component('components.content_header')
        @slot('page_title')
            {{ $title_singular }}
        @endslot
        @slot('breadcrumb')
            {{ Breadcrumbs::render('places_import_create_edit') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    @parent
    <div class="row">
        <div class="col-md-12">
            @component('components.box')
                {!! CoralsForm::openForm($import) !!}
                <div class="row">
                    <div class="col-md-6">
                        {!! CoralsForm::text('title','Places::attributes.import.title',true,$import->title,[]) !!}
                        {!! CoralsForm::radio('status','Corals::attributes.status',true, trans('Places::attributes.import.status_options'),$import->exists ? $import->status : 'pending') !!}
                        {!! CoralsForm::select('type_id', 'Places::attributes.import.type', \Places::getPlacesTypes(), false, null,
[ 'help_text' => ''], 'select2') !!}

                        {!! CoralsForm::select('category_id','Places::attributes.import.listing_type', \Category::getCategoriesList('Directory'),true,null,['id'=>'types', 'multiple'=>false], 'select2') !!}


                    </div>

                    <div class="col-md-6">
                        {!! CoralsForm::text('keyword','Places::attributes.import.keyword' ,false) !!}
                        {!! CoralsForm::number('image_count','Places::attributes.import.image_count',true,null,['help_text'=>'','min'=>0]) !!}
                        {!! CoralsForm::number('max_result_pages','Places::attributes.import.max_result_pages',true,null,['help_text'=>'','min'=>0]) !!}
                        {!! CoralsForm::number('radius','Places::attributes.import.radius',true,null,['help_text'=>'','min'=>0]) !!}
                        {!! CoralsForm::select('location_id','Directory::attributes.listing.location', \Address::getLocationsList('Directory'), true, null, [], 'select2') !!}

                        {!! CoralsForm::textarea('notes', 'Places::attributes.import.notes', false, null,['rows'=>4]) !!}
                    </div>


                    {!! CoralsForm::customFields($import) !!}
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! CoralsForm::formButtons() !!}
                    </div>
                </div>
                {!! CoralsForm::closeForm($import) !!}
            @endcomponent
        </div>
    </div>
@endsection

@section('js')
@endsection
