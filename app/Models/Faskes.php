<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faskes extends Model
{
    use HasFactory;

    protected $table = "tb_faskes";

    protected $primaryKey = "id_faskes";

    protected $fillable = [
      'nama_faskes', 
      'no_telp_faskes',
      'id_kab',
      'alamat_faskes',
      'jenis_faskes',
      'status_faskes',
      'long',
      'lat',
      'kelas',
    ];

    public $timestamps = false;

    public function kabupaten()
    {
      return $this->belongsTo(Kabupaten::class);
    }
}
