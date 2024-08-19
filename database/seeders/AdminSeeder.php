<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::updateOrCreate(
            ['email' => 'basmah.arif@gmail.com'],
            [
                'name' => 'Basmah Arif',
                'email' => 'basmah.arif@gmail.com',
                'password' => Hash::make('languageacademy1324'),
            ]
        );
    }
}
