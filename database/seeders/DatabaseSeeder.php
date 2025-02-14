<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Countries;
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
        $this->call(UsersTableSeeder::class);
        $this->call(MemberGroup::class);

    }
}
