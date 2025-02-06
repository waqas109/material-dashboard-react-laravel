<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'farm_ids' => '[1,2,3,4,5,6,7,8,9,10]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Sub Admin',
            'email' => 'accounts@gmail.com',
            'farm_ids' => '[1,2,3,4,5,6,7,8,9,10]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 1',
            'email' => 'farmone@gmail.com',
            'farm_ids' => '[1]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 2',
            'email' => 'farmtwo@gmail.com',
            'farm_ids' => '[2]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 3',
            'email' => 'farmthree@gmail.com',
            'farm_ids' => '[3]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 4',
            'email' => 'farmfour@gmail.com',
            'farm_ids' => '[4]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 5',
            'email' => 'farmfive@gmail.com',
            'farm_ids' => '[5]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 6',
            'email' => 'farmsix@gmail.com',
            'farm_ids' => '[6]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 7',
            'email' => 'farmseven@gmail.com',
            'farm_ids' => '[7]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 8',
            'email' => 'farmeight@gmail.com',
            'farm_ids' => '[8]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 9',
            'email' => 'farmnine@gmail.com',
            'farm_ids' => '[9]',
            'password' => 'password'
        ]);
        User::create([
            'name' => 'Farm 10',
            'email' => 'farmten@gmail.com',
            'farm_ids' => '[10]',
            'password' => 'password'
        ]);
    }
}
