<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
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
