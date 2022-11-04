<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [ 
            [
                'name' => 'อาคาร 100 ปี',
                'email' => 'garvru01@vru.com',
                'is_admin' => '1',
                'password' => bcrypt('vru001a')
            ],
            [
                'name' => 'อาคาร 75 ปี',
                'email' => 'garvru02@vru.com',
                'is_admin' => '1',
                'password' => bcrypt('vru002b')
            ]
            
        ];

        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}
