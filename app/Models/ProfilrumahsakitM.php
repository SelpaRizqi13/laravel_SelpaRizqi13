<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilrumahsakitM extends Model
{
    use HasFactory;

    protected $table = 'profilrumahsakit_m';
    protected $fillable = [
        'nama_rumahsakit',
        'alamat_rumahsakit',
        'email_rumahsakit',
        'nomor_telp_rumahsakit'
    ];
}
