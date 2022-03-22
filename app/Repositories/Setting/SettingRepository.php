<?php

namespace App\Repositories\Setting;

use App\Models\Reference;
use App\Models\Setting;
use App\Repositories\Setting\SettingInterface as SettingInterface;


class SettingRepository implements SettingInterface
{

    public function updateSetting($request)
    {
        $setting = Setting::where('key', $request->key)->firstOrFail();
        $reference = Reference::find($request->value);
        // update
        $setting->key = $request->key;
        $setting->value = $reference->id;
        $setting->expression = $reference->expression;
        return $setting->update();
    }
}
