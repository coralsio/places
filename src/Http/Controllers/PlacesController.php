<?php

namespace Corals\Modules\Places\Http\Controllers;

use Corals\Foundation\Http\Controllers\BaseController;

use Illuminate\Http\Request;

class PlacesController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function settings(Request $request)
    {
        $this->setViewSharedData(['title_singular' => trans('Places::labels.settings.places_settings')]);

        $config_setting = config('places.settings');
        $settings = [];
        foreach ($config_setting as $key => $setting) {
            $settings['places_' . $key] = ['name' => trans('Places::labels.settings.' . $key), 'settings' => $setting];

        }
        return view('Places::places.settings')->with(compact('settings'));
    }

    public function saveSettings(Request $request)
    {
        try {
            $settings = $request->except('_token');

            foreach ($settings as $key => $value) {
                \Settings::set($key, $value, 'Places');
            }

            flash(trans('Corals::messages.success.saved', ['item' => trans('Places::labels.settings.places_settings')]))->success();
        } catch (\Exception $exception) {
            log_exception($exception, 'PlacesSettings', 'savedSettings');
        }

        return redirectTo(url()->previous());
    }
}
