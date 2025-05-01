<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class CheckSettingsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        
        $settings = Setting::firstOr(function(){
            return Setting::create([
                'name' => 'Ibrahim Khashaba',
                'email' => 'ibrahimahmedkhashaba@gmail.com',
                'phone' => '+201124782711',
                'birthdate' => Carbon::createFromFormat('d/m/Y', '19/03/2000'),
                'address' => '3, El Danan st, Sohag, Egypt',
                'position' => 'Backend Developer',
                'cv' => 'BackEndDeveloper-IbrahimAhmedKhashaba.pdf',
                'location' => '5656445',
                'facebook' => 'dfsdf',
                'instagram' => 'fdsdfs',
                'linkedin' => 'dfssdf',
                'github' => 'dfssfd',

                'hours_worked' => 500,
                'client_count' => 20,
                'cofe_drinked' => 2,

                'slider'=> '292049944_126679466727309_9120247568829038812_n.jpg',
                'image' => 'photo_٢٠٢hg٢-١٠-٢٥_١٢-١٩-٤٥.jpg',
            ]);
        });
        view()->share([
            'settings' => $settings,
        ]);
    }
}
