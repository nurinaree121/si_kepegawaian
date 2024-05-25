<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $table = 'absen';

    protected $primaryKey = 'id_absen';

    public $incrementing = true;

    protected $fillable = [
        'tanggal',
        'jam_masuk',
        'jam_keluar',
        'id_pegawai'
    ];

    //many to one krn pegawai absen bisa lebih dari satu kali
    public function pegawai()
    
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
