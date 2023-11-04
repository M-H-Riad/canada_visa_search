<?php

namespace Database\Seeders;

use App\Models\ApplicationStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Super Admin',
            'email' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        // Seed data for status fields
        ApplicationStatus::create([
            'status_1' => 'Status 1 Name',
            'status_2' => 'Status 2 Name',
            'status_3' => 'Status 3 Name',
            'status_4' => 'Status 4 Name',
            'status_5' => 'Status 5 Name',
            'status_6' => 'Status 6 Name',
            'status_7' => 'Status 7 Name',
        ]);
    }
}
