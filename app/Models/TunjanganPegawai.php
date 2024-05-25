<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TunjanganPegawai extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    protected $fillable = ['jml_tunjangan','jml_potongan','tanggal','id_pegawai'];

    //many to one krn pegawai dpt tunjangan bisa lebih dari satu kali/per bulan
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id');
    }
}
