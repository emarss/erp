<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrganisationsSeeder::class);
        $this->call(DepartmentsSeeder::class);
        $this->call(CurrenciesSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(UserRolesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
