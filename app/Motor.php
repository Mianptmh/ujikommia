<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table="motors";
    protected $primaryKey="kode_motor";
    protected $fillable=['merk_kode','type_motor',
                        'warna_motor','harga_motor','gambar_motor'];  
}
