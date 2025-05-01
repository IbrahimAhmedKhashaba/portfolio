<?php 

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\SettingRepository;

class SettingService
{
    private $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function update($request){
        return $this->settingRepository->update($request);
    }

}