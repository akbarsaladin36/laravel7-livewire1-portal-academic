<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'user_username' => 'admin',
                'user_email' => 'admin@test.com',
                'user_password'=> Hash::make('admin'),
                'user_status_cd'=>'admin',
                'user_created_date' => date("Y-m-d H:i:s"),
                'user_created_user_id' => '1',
                'user_created_username' => 'admin'
            ],
            [
                'user_username' => 'user1',
                'user_email' => 'user1@test.com',
                'user_password'=> Hash::make('user1'),
                'user_status_cd'=>'mahasiswa',
                'user_created_date' => date("Y-m-d H:i:s"),
                'user_created_user_id' => '1',
                'user_created_username' => 'admin'
            ],
            [
                'user_username' => 'user2',
                'user_email' => 'user2@test.com',
                'user_password'=> Hash::make('user2'),
                'user_status_cd'=>'mahasiswa',
                'user_created_date' => date("Y-m-d H:i:s"),
                'user_created_user_id' => '1',
                'user_created_username' => 'admin'
            ],
            [
                'user_username' => 'user3',
                'user_email' => 'user3@test.com',
                'user_password'=> Hash::make('user3'),
                'user_status_cd'=>'mahasiswa',
                'user_created_date' => date("Y-m-d H:i:s"),
                'user_created_user_id' => '1',
                'user_created_username' => 'admin'
            ],
            [
                'user_username' => 'user4',
                'user_email' => 'user4@test.com',
                'user_password'=> Hash::make('user4'),
                'user_status_cd'=>'mahasiswa',
                'user_created_date' => date("Y-m-d H:i:s"),
                'user_created_user_id' => '1',
                'user_created_username' => 'admin'
            ],
            [
                'user_username' => 'user5',
                'user_email' => 'user5@test.com',
                'user_password'=> Hash::make('user5'),
                'user_status_cd'=>'mahasiswa',
                'user_created_date' => date("Y-m-d H:i:s"),
                'user_created_user_id' => '1',
                'user_created_username' => 'admin'
            ]
        ];

        return DB::table('users')->insert($data);
    }
}
