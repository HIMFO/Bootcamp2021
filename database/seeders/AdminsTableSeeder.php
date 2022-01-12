<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create initial data for admins
        Admin::create([
            'name' => 'Administrator',
            'email' => 'administrator@local.host',
            'password' => Hash::make('administrator')
        ]);
    }
}
