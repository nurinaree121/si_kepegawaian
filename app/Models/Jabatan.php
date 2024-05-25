<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';

    protected $primaryKey = 'id_jabatan';

    public $incrementing = true;

    protected $fillable = ['nama_jabatan','golongan','tunjangan'];

    public $timestamps = false;

    
}
