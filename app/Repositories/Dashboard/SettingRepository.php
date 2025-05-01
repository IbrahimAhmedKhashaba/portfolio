<?php

namespace App\Repositories\Dashboard;

use App\Models\Setting;
use App\Traits\UploadImage;
use Illuminate\Support\Facades\Session;

class SettingRepository
{
    use UploadImage;
    public function update($request){
        try{
            $setting = Setting::first();
            if($request->file('image')){
                $this->deleteImage('uploads/settings/'.$setting->image);
                $setting->image = $this->uploadImage($request->file('image'), 'settings', 'uploads');
            }
            if($request->file('slider')){
                $this->deleteImage('uploads/settings/'.$setting->slider);
                $setting->slider = $this->uploadImage($request->file('slider'), 'settings', 'uploads');
            }
            if($request->file('cv')){
                $this->deleteImage('uploads/settings/'.$setting->cv);
                $setting->cv = $this->uploadImage($request->file('cv'), 'settings', 'uploads');
            }
            $setting->update($request->except(['image', 'slider' , 'cv' , '_token']));
            $setting->save();
            Session::flash('success', 'Setting updated successfully');
        } catch (\Exception $e){
            Session::flash('success', 'Setting updated successfully');
        }
        return $setting;
    }
}