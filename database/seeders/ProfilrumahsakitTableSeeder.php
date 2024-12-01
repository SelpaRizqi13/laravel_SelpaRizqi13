<?php

namespace Database\Seeders;
use App\Models\ProfilrumahsakitM;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class ProfilrumahsakitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profilrumahsakit =
        [
            [
                'nama_rumahsakit' => 'RSUD Majalaya',
                'alamat_rumahsakit' => 'Majalaya Kabupaten Bandung',
                'email_rumahsakit' => 'rsudmajalaya@gmail.com',
                'nomor_telp_rumahsakit' => '081234345456',
            ],
            [
                'nama_rumahsakit' => 'RSUD Ciparay',
                'alamat_rumahsakit' => 'Ciparay Kabupaten Bandung',
                'email_rumahsakit' => 'rsudciparay@gmail.com',
                'nomor_telp_rumahsakit' => '081234345678',
            ],
            [
                'nama_rumahsakit' => 'RSUD Rancaekek',
                'alamat_rumahsakit' => 'Rancaekek Kabupaten Bandung',
                'email_rumahsakit' => 'rsudrancaekek@gmail.com',
                'nomor_telp_rumahsakit' => '081234345456',
            ],
            ];
        foreach ($profilrumahsakit as $user) {
            ProfilrumahsakitM::create($user);
        }
    }
}
