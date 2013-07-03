<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $data = array(
            array('username' => 'admin',
                'email' => 'duniadua@gmail.com',
                'password' => 'admin',
                'role' => 1,
                'active' => 'true'),
            array('username' => 'sahid',
                'email' => 'duniadua@gmail.com',
                'password' => 'sahid',
                'role' => 1,
                'active' => 'true')
        );

        DB::table('users')->insert($data);
    }

}