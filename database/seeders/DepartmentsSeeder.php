<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Digital Marketing',
            'description' => 'Offering Social Media Management & Marketing, Search Engine Optimisation and Content Creation',
            'slug' => Str::slug('Digital Marketing'),
            'added_by' => 1,
        ]);
    }
}
