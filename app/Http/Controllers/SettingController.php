<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingRequest;
use App\Repositories\Setting\SettingInterface;

class SettingController extends Controller
{
    public function __construct(SettingInterface $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function update(UpdateSettingRequest $request)
    {
        return $this->settingRepository->updateSetting($request);
    }
}
