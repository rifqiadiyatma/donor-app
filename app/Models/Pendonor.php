<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    use HasFactory;

    protected $table = "tb_pendonor";
    
    protected $primaryKey = "id_pendonor";

    protected $fillable = [
      'nik',
      'nama_lengkap',
      'email',
      'no_hp',
      'id_kab',
      'alamat',
      'gol_darah',
      'tgl_terpapar',
      'tgl_sembuh',
      'status',
      'eligible',
      'usia',
      'waktu_periksa_pmi',
      'skema_daftar',
      'id_faskes',
      'verifikator'
    ];

    public $timestamps = false;
}
