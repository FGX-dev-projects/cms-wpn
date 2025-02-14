<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        DB::table('users')->insert([
            'name' => 'wpn',
            'surname' => 'wpn',
            'email' => 'admin@wpn.co.za',
            'password' => bcrypt('admin@wpn')
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriel',
            'surname' => 'Null',
            'email' => 'gabriel@fgx.co.za',
            'password' => bcrypt('123')
        ]);

    }
}
