<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use App\Models\UserAccountStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Rufaro',
            'middle_name' => 'Emarss',
            'last_name' => 'Sithole',
            'email' => 'rufarosithole4@gmail.com',
            'password' => Hash::make('CaRtEr.4'),
            'status' => UserAccountStatus::ACTIVE,
            'role' => 'admin',
            'added_by' => 1,
        ]);

        UserProfile::create([
            'affiliation' => 'Chief Executive Officer',
            'national_id' => '13-26217-V-13',
            'phone' => '0774671339',
            'next_of_kin' => 'Edward Sithole (Father)',
            'address' => '4688, Gaza, Chipinge',
            'sex' => 'male',
            'user_id' => 1,
        ]);

        DB::table('department_user')->insert([
            'department_id' => 1,
            'user_id' => 1,
        ]);
    }
}
