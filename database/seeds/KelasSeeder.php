<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusans = DB::table('pa_jurusans')->get()->toArray();

        foreach($jurusans as $jurusan) {

            $kelas = [
                [
                    'fakultas_id' => $jurusan->fakultas_id,
                    'jurusan_id' => $jurusan->jurusan_id,
                    'kelas_code' => $jurusan->jurusan_code."-"."A",
                    'kelas_name' => $jurusan->jurusan_name." Kelas A",
                    'jumlah_mahasiswa' => '50',
                    'kelas_created_date' => date("Y-m-d H:i:s"),
                    'kelas_created_user_id' => '1',
                    'kelas_created_username' => 'admin'
                ],
                [
                    'fakultas_id' => $jurusan->fakultas_id,
                    'jurusan_id' => $jurusan->jurusan_id,
                    'kelas_code' => $jurusan->jurusan_code."-"."B",
                    'kelas_name' => $jurusan->jurusan_name." Kelas B",
                    'jumlah_mahasiswa' => '50',
                    'kelas_created_date' => date("Y-m-d H:i:s"),
                    'kelas_created_user_id' => '1',
                    'kelas_created_username' => 'admin'
                ],
                [
                    'fakultas_id' => $jurusan->fakultas_id,
                    'jurusan_id' => $jurusan->jurusan_id,
                    'kelas_code' => $jurusan->jurusan_code."-"."C",
                    'kelas_name' => $jurusan->jurusan_name." Kelas C",
                    'jumlah_mahasiswa' => '50',
                    'kelas_created_date' => date("Y-m-d H:i:s"),
                    'kelas_created_user_id' => '1',
                    'kelas_created_username' => 'admin'
                ],
                [
                    'fakultas_id' => $jurusan->fakultas_id,
                    'jurusan_id' => $jurusan->jurusan_id,
                    'kelas_code' => $jurusan->jurusan_code."-"."D",
                    'kelas_name' => $jurusan->jurusan_name." Kelas D",
                    'jumlah_mahasiswa' => '50',
                    'kelas_created_date' => date("Y-m-d H:i:s"),
                    'kelas_created_user_id' => '1',
                    'kelas_created_username' => 'admin'
                ]
            ];

            DB::table('pa_kelas')->insert($kelas);
        }
        
    }
}
