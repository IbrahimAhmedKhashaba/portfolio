<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Services\Dashboard\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    //
    private $settingService;
    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }
    public function index()
    {
        return view('dashboard.settings.index');
    }

    public function update(SettingRequest $request)
    {
        $this->settingService->update($request);
        return redirect()->back();
    }
}
