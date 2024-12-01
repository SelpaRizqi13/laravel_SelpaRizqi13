<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProfilrumahsakitM;

class PasienM extends Model
{
    use HasFactory;

    protected $table = 'pasien_m';

    public function rumahsakit()
    {
        return $this->belongsTo(ProfilRumahSakitM::class, 'profilrumahsakit_id');
    }
}
