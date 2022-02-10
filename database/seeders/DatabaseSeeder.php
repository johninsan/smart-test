<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table('roles')->insert([ //mengisi datadi database
            'name' => 'Super Admin',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([ //mengisi datadi database
            'name' => 'Admin',
            'user_id' => '2',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([ //mengisi datadi database
            'name' => 'Editor',
            'user_id' => '3',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([ //mengisi datadi database
            'name' => 'Author',
            'user_id' => '4',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('roles')->insert([ //mengisi datadi database
            'name' => 'Guest',
            'user_id' => '5',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
