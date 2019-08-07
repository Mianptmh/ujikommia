<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeliKridit extends Model
{
    protected $table="beli_kridits";
    protected $primaryKey="pembeli_no_ktp";
    protected $fillable=['paket_kode','motor_kode','kridit_tanggal',
                        'fotokopi_ktp','fotokopi_kk','fotokopi_slip_gaji'];
}
