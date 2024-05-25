<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    public $incrementing = true;
    protected $fillable = ['nip','nama','jenis_kelamin','foto','agama','pendidikan','status_kepegawaian','alamat','username','password'];
    public $timestamps = false;
}
