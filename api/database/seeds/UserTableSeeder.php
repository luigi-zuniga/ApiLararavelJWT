<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = 
        [
            [
                'name'=>'Luigi Zuñiga',
                'email'=>'Kevin.c@myapi.com',
                'password'=> Hash::make('123456789')
                
            ]
        ];

        foreach($users as $user)
        {
            \App\user::create($user);
        }
    }
}
