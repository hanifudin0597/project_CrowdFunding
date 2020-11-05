<?php

use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'id_role' => '1',
        	'name' => 'admin',	
        ]);
        DB::table('roles')->insert([
        	'id_role' => '0',
        	'name' => 'user',	
        ]);
    }
}
