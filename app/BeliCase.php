<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeliCase extends Model
{
    protected $table="beli_cases";
    protected $primaryKey="pembeli_no_ktp";
    protected $fillable=['motor_kode','case_tanggal','cash_bayar'];
}
