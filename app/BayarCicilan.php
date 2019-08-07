<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BayarCicilan extends Model
{
    protected $table="bayar_cicilans";
    protected $primaryKey="cicilan_kode";
    protected $fillable=['kridit_kode','cicilan_tanggal','cicilan_jumlah','cicilan_ke','cicilan_sisa_ke','cicilan_sisa_harga'];
}
