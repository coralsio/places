<?php

//Import
Breadcrumbs::register('places_imports', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Places::module.import.title'), url(config('places.models.import.resource_url')));
});

Breadcrumbs::register('places_import_create_edit', function ($breadcrumbs) {
    $breadcrumbs->parent('places_imports');
    $breadcrumbs->push(view()->shared('title_singular'));
});

Breadcrumbs::register('places_import_show', function ($breadcrumbs) {
    $breadcrumbs->parent('places_imports');
    $breadcrumbs->push(view()->shared('title_singular'));
});

//Settings
Breadcrumbs::register('places_settings', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push(trans('Places::labels.settings.title'), 'places/settings');
});
