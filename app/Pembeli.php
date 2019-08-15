<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table="pembelis";
    protected $primaryKey="NO_KTP";
    protected $fillable=['nama_pembeli','alamat_pembeli',
                        'no_tlp_pembeli','hp_pembeli'];
}
