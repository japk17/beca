<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'editor',
                'email' => 'editor@unefa.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$XhMob3zyn2GR0J2rW77LQub4PjsrDNAiu8/6O5I9Q0PfmlSWCB9UC',
                'remember_token' => NULL,
                'created_at' => '2019-05-23 14:05:41',
                'updated_at' => '2019-05-23 14:05:41',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'moderador',
                'email' => 'moderador@unefa.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$XhMob3zyn2GR0J2rW77LQub4PjsrDNAiu8/6O5I9Q0PfmlSWCB9UC',
                'remember_token' => NULL,
                'created_at' => '2019-05-23 14:05:41',
                'updated_at' => '2019-05-23 14:05:41',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'admin',
                'email' => 'admin@unefa.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$XhMob3zyn2GR0J2rW77LQub4PjsrDNAiu8/6O5I9Q0PfmlSWCB9UC',
                'remember_token' => NULL,
                'created_at' => '2019-05-23 14:05:42',
                'updated_at' => '2019-05-23 14:05:42',
            ),
        ));
        
        
    }
}