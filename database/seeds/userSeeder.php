<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'id' => '1',
            'name' => 'admin123',
            'email' => 'admin@admin.com',
            'email_verified_at' => '2020-11-27 00:00:00',
            'password' => bcrypt('admin123'),
            'created_at' => '2020-11-05 00:45:07',
            'updated_at' => '2020-11-05 00:45:07',
            'id_role' => '1',
        ]);
        DB::table('users')->insert([
        	'id' => '2',
            'name' => 'user123',
            'email' => 'user@user.com',
            'email_verified_at' => '2020-11-27 00:00:01',
            'password' => bcrypt('user123'),
            'created_at' => '2020-11-05 00:45:08',
            'updated_at' => '2020-11-05 00:45:08',
            'id_role' => '0',	
        ]);
    }
}
