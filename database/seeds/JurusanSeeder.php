<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JurusanSeeder extends Seeder
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
                'fakultas_id' => '1',
                'jurusan_code' => 'S1-REG-FK',
                'jurusan_name' => 'S1 Reguler Kedokteran',
                'jurusan_description' => 'S1 reguler kedokteran',
                'jurusan_slug' => Str::slug('S1 Reguler Kedokteran'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '1',
                'jurusan_code' => 'S1-INT-FK',
                'jurusan_name' => 'S1 Internasional Kedokteran',
                'jurusan_description' => 'S1 internasional kedokteran',
                'jurusan_slug' => Str::slug('S1 Internasional Kedokteran'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '2',
                'jurusan_code' => 'S1-REG-FKG',
                'jurusan_name' => 'S1 Reguler Kedokteran Gigi',
                'jurusan_description' => 'S1 reguler kedokteran gigi',
                'jurusan_slug' => Str::slug('S1 Reguler Kedokteran Gigi'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '2',
                'jurusan_code' => 'S1-INT-FKG',
                'jurusan_name' => 'S1 Internasional Kedokteran Gigi',
                'jurusan_description' => 'S1 internasional kedokteran gigi',
                'jurusan_slug' => Str::slug('S1 Internasional Kedokteran Gigi'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '3',
                'jurusan_code' => 'S1-REG-FKM',
                'jurusan_name' => 'S1 Reguler Kesehatan Masyarakat',
                'jurusan_description' => 'S1 reguler kesehatan masyarakat',
                'jurusan_slug' => Str::slug('S1 Reguler Kesehatan Masyarakat'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '3',
                'jurusan_code' => 'S1-INT-FKM',
                'jurusan_name' => 'S1 Internasional Kesehatan Masyarakat',
                'jurusan_description' => 'S1 internasional kesehatan masyarakat',
                'jurusan_slug' => Str::slug('S1 Internasional Kesehatan Masyarakat'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '4',
                'jurusan_code' => 'S1-REG-FPsi',
                'jurusan_name' => 'S1 Reguler Psikologi',
                'jurusan_description' => 'S1 reguler psikologi',
                'jurusan_slug' => Str::slug('S1 Reguler Psikologi'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '4',
                'jurusan_code' => 'S1-INT-FPsi',
                'jurusan_name' => 'S1 Internasional Psikologi',
                'jurusan_description' => 'S1 internasional psikologi',
                'jurusan_slug' => Str::slug('S1 Internasional Psikologi'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '5',
                'jurusan_code' => 'S1-REG-ILKOM',
                'jurusan_name' => 'S1 Reguler Ilmu Komputer',
                'jurusan_description' => 'S1 reguler ilmu komputer',
                'jurusan_slug' => Str::slug('S1 Reguler Ilmu Komputer'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '5',
                'jurusan_code' => 'S1-INT-ILKOM',
                'jurusan_name' => 'S1 Internasional Ilmu Komputer',
                'jurusan_description' => 'S1 internasional ilmu komputer',
                'jurusan_slug' => Str::slug('S1 Internasional Ilmu Komputer'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '5',
                'jurusan_code' => 'D3-REG-ILKOM',
                'jurusan_name' => 'D3 Reguler Ilmu Komputer',
                'jurusan_description' => 'd3 reguler ilmu komputer',
                'jurusan_slug' => Str::slug('D3 Reguler Ilmu Komputer'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '5',
                'jurusan_code' => 'S1-REG-TI',
                'jurusan_name' => 'S1 Reguler Teknologi Informatika',
                'jurusan_description' => 'S1 reguler teknologi informatika',
                'jurusan_slug' => Str::slug('S1 Reguler Teknologi Informatika'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '5',
                'jurusan_code' => 'S1-INT-TI',
                'jurusan_name' => 'S1 Internasional Teknologi Informatika',
                'jurusan_description' => 'S1 internasional teknologi informatika',
                'jurusan_slug' => Str::slug('S1 Internasional Teknologi Informatika'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '5',
                'jurusan_code' => 'D3-REG-TI',
                'jurusan_name' => 'D3 Reguler Teknologi Informatika',
                'jurusan_description' => 'd3 reguler teknologi informatika',
                'jurusan_slug' => Str::slug('D3 Reguler Teknologi Informatika'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '6',
                'jurusan_code' => 'S1-REG-FH',
                'jurusan_name' => 'S1 Reguler Hukum',
                'jurusan_description' => 'S1 reguler hukum',
                'jurusan_slug' => Str::slug('S1 Reguler Hukum'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '6',
                'jurusan_code' => 'S1-INT-FH',
                'jurusan_name' => 'S1 Internasional Hukum',
                'jurusan_description' => 'S1 internasional hukum',
                'jurusan_slug' => Str::slug('S1 Internasional Hukum'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '7',
                'jurusan_code' => 'S1-REG-FP',
                'jurusan_name' => 'S1 Reguler Pertanian',
                'jurusan_description' => 'S1 reguler Pertanian',
                'jurusan_slug' => Str::slug('S1 Reguler Pertanian'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '7',
                'jurusan_code' => 'S1-INT-FP',
                'jurusan_name' => 'S1 Internasional Pertanian',
                'jurusan_description' => 'S1 internasional Pertanian',
                'jurusan_slug' => Str::slug('S1 Internasional Pertanian'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '8',
                'jurusan_code' => 'S1-REG-FEB',
                'jurusan_name' => 'S1 Reguler Ekonomi dan Bisnis',
                'jurusan_description' => 'S1 reguler ekonomi dan bisnis',
                'jurusan_slug' => Str::slug('S1 Reguler Ekonomi dan Bisnis'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '8',
                'jurusan_code' => 'S1-INT-FEB',
                'jurusan_name' => 'S1 Internasional Ekonomi dan Bisnis',
                'jurusan_description' => 'S1 internasional ekonomi dan bisnis',
                'jurusan_slug' => Str::slug('S1 Internasional Ekonomi dan Bisnis'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '8',
                'jurusan_code' => 'D3-REG-FEB',
                'jurusan_name' => 'D3 Reguler Ekonomi dan Bisnis',
                'jurusan_description' => 'd3 reguler ekonomi dan bisnis',
                'jurusan_slug' => Str::slug('D3 Reguler Ekonomi dan Bisnis'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '9',
                'jurusan_code' => 'S1-REG-FISIP',
                'jurusan_name' => 'S1 Reguler Ilmu Sosial dan Ilmu Politik',
                'jurusan_description' => 'S1 reguler ilmu sosial dan ilmu politik',
                'jurusan_slug' => Str::slug('S1 Reguler Ilmu Sosial dan Ilmu Politik'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '9',
                'jurusan_code' => 'S1-INT-FISIP',
                'jurusan_name' => 'S1 Internasional Ilmu Sosial dan Ilmu Politik',
                'jurusan_description' => 'S1 internasional ilmu sosial dan ilmu politik',
                'jurusan_slug' => Str::slug('S1 Internasional Ilmu Sosial dan Ilmu Politik'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '10',
                'jurusan_code' => 'S1-REG-FMIPA',
                'jurusan_name' => 'S1 Reguler Matematika dan Ilmu Pengetahuan Alam',
                'jurusan_description' => 'S1 reguler matematika dan ilmu pengetahuan alam',
                'jurusan_slug' => Str::slug('S1 Reguler Matematika dan Ilmu Pengetahuan Alam'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '10',
                'jurusan_code' => 'S1-INT-FMIPA',
                'jurusan_name' => 'S1 Internasional Matematika dan Ilmu Pengetahuan Alam',
                'jurusan_description' => 'S1 internasional matematika dan ilmu pengetahuan alam',
                'jurusan_slug' => Str::slug('S1 Internasional Matematika dan Ilmu Pengetahuan Alam'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '10',
                'jurusan_code' => 'D3-REG-FMIPA',
                'jurusan_name' => 'D3 Reguler Matematika dan Ilmu Pengetahuan Alam',
                'jurusan_description' => 'd3 reguler matematika dan ilmu pengetahuan alam',
                'jurusan_slug' => Str::slug('D3 Reguler Matematika dan Ilmu Pengetahuan Alam'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '11',
                'jurusan_code' => 'S1-REG-FIB',
                'jurusan_name' => 'S1 Reguler Ilmu Budaya',
                'jurusan_description' => 'S1 reguler ilmu budaya',
                'jurusan_slug' => Str::slug('S1 Reguler Ilmu Budaya'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '11',
                'jurusan_code' => 'S1-INT-FIB',
                'jurusan_name' => 'S1 Internasional Ilmu Budaya',
                'jurusan_description' => 'S1 internasional ilmu budaya',
                'jurusan_slug' => Str::slug('S1 Internasional Ilmu Budaya'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '11',
                'jurusan_code' => 'D3-REG-FIB',
                'jurusan_name' => 'D3 Reguler Ilmu Budaya',
                'jurusan_description' => 'd3 reguler ilmu budaya',
                'jurusan_slug' => Str::slug('D3 Reguler Ilmu Budaya'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '12',
                'jurusan_code' => 'S1-REG-FF',
                'jurusan_name' => 'S1 Reguler Farmasi',
                'jurusan_description' => 'S1 reguler farmasi',
                'jurusan_slug' => Str::slug('S1 Reguler Farmasi'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '12',
                'jurusan_code' => 'S1-INT-FF',
                'jurusan_name' => 'S1 Internasional Farmasi',
                'jurusan_description' => 'S1 internasional farmasi',
                'jurusan_slug' => Str::slug('S1 Internasional Farmasi'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '12',
                'jurusan_code' => 'D3-REG-FF',
                'jurusan_name' => 'D3 Reguler Farmasi',
                'jurusan_description' => 'd3 reguler farmasi',
                'jurusan_slug' => Str::slug('D3 Reguler Farmasi'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '13',
                'jurusan_code' => 'S1-REG-FHut',
                'jurusan_name' => 'S1 Reguler Kehutanan',
                'jurusan_description' => 'S1 reguler kehutanan',
                'jurusan_slug' => Str::slug('S1 Reguler Kehutanan'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ],
            [
                'fakultas_id' => '13',
                'jurusan_code' => 'S1-INT-FHut',
                'jurusan_name' => 'S1 Internasional Kehutanan',
                'jurusan_description' => 'S1 internasional kehutanan',
                'jurusan_slug' => Str::slug('S1 Internasional Kehutanan'),
                'jurusan_created_date' => date('Y-m-d H:i:s'),
                'jurusan_created_user_id' => '1',
                'jurusan_created_username' => 'admin'
            ]
        ];

        return DB::table('pa_jurusans')->insert($data);
    }
}
