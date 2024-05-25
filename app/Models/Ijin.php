<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ijin extends Model
{
    use HasFactory;

    protected $table = 'ijin';

    protected $fillable = ['tanggal_ijin','keterangan_ijin','id_pegawai'];


    //many to one krn pegawai ijin bisa lebih dari satu kali
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id');
    }
}
