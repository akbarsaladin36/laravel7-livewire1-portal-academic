<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FakultasSeeder extends Seeder
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
                'fakultas_code' => 'FK',
                'fakultas_name' => 'Fakultas Kedokteran',
                'fakultas_description' => 'fakultas kedokteran',
                'fakultas_slug' => Str::slug('Fakultas Kedokteran'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FKG',
                'fakultas_name' => 'Fakultas Kedokteran Gigi',
                'fakultas_description' => 'fakultas kedokteran gigi',
                'fakultas_slug' => Str::slug('Fakultas Kedokteran Gigi'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FKM',
                'fakultas_name' => 'Fakultas Kesehatan Masyarakat',
                'fakultas_description' => 'fakultas kesehatan masyarakat',
                'fakultas_slug' => Str::slug('Fakultas Kesehatan Masyarakat'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FPsi',
                'fakultas_name' => 'Fakultas Psikologi',
                'fakultas_description' => 'fakultas psikologi',
                'fakultas_slug' => Str::slug('Fakultas Psikologi'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FASILKOM-TI',
                'fakultas_name' => 'Fakultas Ilmu Komputer dan Teknologi Informatika',
                'fakultas_description' => 'fakultas ilmu komputer dan teknologi informatika',
                'fakultas_slug' => Str::slug('Fakultas Ilmu Komputer dan Teknologi Informatika'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FH',
                'fakultas_name' => 'Fakultas Hukum',
                'fakultas_description' => 'fakultas hukum',
                'fakultas_slug' => Str::slug('Fakultas Hukum'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FP',
                'fakultas_name' => 'Fakultas Pertanian',
                'fakultas_description' => 'fakultas pertanian',
                'fakultas_slug' => Str::slug('Fakultas Pertanian'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FEB',
                'fakultas_name' => 'Fakultas Ekonomi dan Bisnis',
                'fakultas_description' => 'fakultas ekonomi dan bisnis',
                'fakultas_slug' => Str::slug('Fakultas Ekonomi dan Bisnis'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FISIP',
                'fakultas_name' => 'Fakultas Ilmu Sosial dan Ilmu Politik',
                'fakultas_description' => 'fakultas ilmu sosial dan ilmu politik',
                'fakultas_slug' => Str::slug('Fakultas Ilmu Sosial dan Ilmu Politik'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FMIPA',
                'fakultas_name' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam',
                'fakultas_description' => 'fakultas matematika dan ilmu pengetahuan alam',
                'fakultas_slug' => Str::slug('Fakultas Matematika dan Ilmu Pengetahuan Alam'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FIB',
                'fakultas_name' => 'Fakultas Ilmu Budaya',
                'fakultas_description' => 'fakultas ilmu budaya',
                'fakultas_slug' => Str::slug('Fakultas Ilmu Budaya'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FF',
                'fakultas_name' => 'Fakultas Farmasi',
                'fakultas_description' => 'fakultas farmasi',
                'fakultas_slug' => Str::slug('Fakultas Farmasi'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            [
                'fakultas_code' => 'FHut',
                'fakultas_name' => 'Fakultas Kehutanan',
                'fakultas_description' => 'fakultas kehutanan',
                'fakultas_slug' => Str::slug('Fakultas Kehutanan'),
                'fakultas_created_date' => date('Y-m-d H:i:s'),
                'fakultas_created_user_id' => '1',
                'fakultas_created_username' => 'admin'
            ],
            
        ];

        return DB::table('pa_fakultas')->insert($data);
    }
}
