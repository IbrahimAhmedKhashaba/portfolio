<?php

namespace Database\Seeders;

use App\Models\Expertise;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ibrahim Khashaba',
            'email' => 'ibrahim@admin.com',
            'password' => Hash::make('789789789'),
        ]);

        Expertise::create([
            'title' => 'UX Design',
            'desc' => 'exercitat Repellendus, corrupt.',
            'icon' => 'ti-widget icon-lg'
        ]);
        
        Expertise::create([
            'title' => 'Web Development',
            'desc' => 'Lorem ipsum dolor sit consectetur.',
            'icon' => 'ti-paint-bucket icon-lg'
        ]);

        Expertise::create([
            'title' => 'Digital Marketing',
            'desc' => 'voluptate commodi illo voluptatib.',
            'icon' => 'ti-stats-up icon-lg'
        ]);
    }
}
