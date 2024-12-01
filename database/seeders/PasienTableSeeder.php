<?php

namespace Database\Seeders;
use App\Models\PasienM;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class PasienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasien =
        [
            [
                'nama_pasien' => 'Tes Pasien Pertama',
                'alamat_pasien' => 'Majalaya',
                'no_telp_pasien' => '089789678567',
                'profilrumahsakit_id' => '1',
            ],
            [
                'nama_pasien' => 'Tes Pasien Kedua',
                'alamat_pasien' => 'Majalaya',
                'no_telp_pasien' => '089789678567',
                'profilrumahsakit_id' => '2',
            ],
            [
                'nama_pasien' => 'Tes Pasien Ketiga',
                'alamat_pasien' => 'Majalaya',
                'no_telp_pasien' => '089789678567',
                'profilrumahsakit_id' => '1',
            ],
            ];
        foreach ($pasien as $user) {
            PasienM::create($user);
        }
    }
}
