<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'editor',
                'guard_name' => 'web',
                'created_at' => '2019-05-23 14:05:40',
                'updated_at' => '2019-05-23 14:05:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'moderator',
                'guard_name' => 'web',
                'created_at' => '2019-05-23 14:05:40',
                'updated_at' => '2019-05-23 14:05:40',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'super-admin',
                'guard_name' => 'web',
                'created_at' => '2019-05-23 14:05:40',
                'updated_at' => '2019-05-23 14:05:40',
            ),
        ));
        
        
    }
}