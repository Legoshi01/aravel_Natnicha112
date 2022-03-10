<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
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
        $date = [
            [
                'name' => 'natnicha',
                'email' => '622021112@tsu.ac.th',
                'password' => Hash::make('123456'),
                'role' => 1,
                'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),

            ],
            [
                'name' => 'milk',
                'email' => '622021112@tsu.ac.th',
                'password' => Hash::make('123456'),
                'role' => 2,
                'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($date);
    }
}
