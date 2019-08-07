<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KriditPaket extends Model
{
    protected $table="kridit_pakets";
    protected $primaryKey="paket_kode";
    protected $fillable=['paket_harga_cash','paket_uang_muka',
                        'paket_jumlah_cicilan','paket_bunga','paket_nilai_cicilan'];
}
