<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table="motors";
    protected $primaryKey="motor_kode";
    protected $fillable=['motor_merk','motor_type',
                        'motor_warna_pilihan','motor_harga','motor_gambar'];  
}
