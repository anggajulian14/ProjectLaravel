<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataMHSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mhs_bioadata')->insert([
            'nim' => 'E41221919',
            'nama_mhs' => 'Muhammad Firdaus',
            'prodi_mhs' => 'Teknik Informatika',
            'alamat_mhs' => 'Jl. Pemuda No. 1',
            'telepon_mhs' => '081234567890',
            'tanggal_lahir_mhs' => '2000-01-01',
        ]);
    }
}
