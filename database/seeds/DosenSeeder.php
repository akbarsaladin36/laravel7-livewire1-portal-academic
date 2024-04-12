<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DosenSeeder extends Seeder
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
                'dosen_username' => 'dosen1',
                'dosen_full_name' => 'Dosen1',
                'dosen_email' => 'dosen1@test.com',
                'dosen_password' => Hash::make('dosen1'),
                'dosen_created_date' => date("Y-m-d H:i:s"),
                'dosen_created_user_id' => '1',
                'dosen_created_username' => 'admin'
            ],
            [
                'dosen_username' => 'dosen2',
                'dosen_full_name' => 'Dosen2',
                'dosen_email' => 'dosen2@test.com',
                'dosen_password' => Hash::make('dosen2'),
                'dosen_created_date' => date("Y-m-d H:i:s"),
                'dosen_created_user_id' => '1',
                'dosen_created_username' => 'admin'
            ],
            [
                'dosen_username' => 'dosen3',
                'dosen_full_name' => 'Dosen3',
                'dosen_email' => 'dosen3@test.com',
                'dosen_password' => Hash::make('dosen3'),
                'dosen_created_date' => date("Y-m-d H:i:s"),
                'dosen_created_user_id' => '1',
                'dosen_created_username' => 'admin'
            ],
            [
                'dosen_username' => 'dosen4',
                'dosen_full_name' => 'Dosen4',
                'dosen_email' => 'dosen4@test.com',
                'dosen_password' => Hash::make('dosen4'),
                'dosen_created_date' => date("Y-m-d H:i:s"),
                'dosen_created_user_id' => '1',
                'dosen_created_username' => 'admin'
            ],
            [
                'dosen_username' => 'dosen5',
                'dosen_full_name' => 'Dosen5',
                'dosen_email' => 'dosen5@test.com',
                'dosen_password' => Hash::make('dosen5'),
                'dosen_created_date' => date("Y-m-d H:i:s"),
                'dosen_created_user_id' => '1',
                'dosen_created_username' => 'admin'
            ]
        ];

        return DB::table('pa_dosens')->insert($data);
    }
}
