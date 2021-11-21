<?php

use Illuminate\Database\Seeder;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->truncate();
$item = [
    'username' => 'admin',
    'password' => bcrypt('password'),
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now()
];
\Illuminate\Support\Facades\DB::table('users')->insert($item);
    }
}
