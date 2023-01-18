<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;

    protected $table = "tb_kabupaten";

    protected $primaryKey = "id_kab";

    protected $fillable = ['nama_kab'];

    public $timestamps = false;

    public function faskes() 
    {
      return $this->hasMany(Faskes::class, 'id_kab', 'id_kab');
    }
}
