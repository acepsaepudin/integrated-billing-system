<?php

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Acep Saepudin',
            'username' => 'admin',
            'email'    => 'info@acep.web.id',
            'password' => Hash::make('admin'),
        ));
    }

}