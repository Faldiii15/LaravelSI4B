<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
     protected $fillable = ['npm','nama','tempat_lahir','tanggal_lahir','alamat','prodi_id'];
     public function prodi(){
        return $this ->belongsTo(Prodi::class, 'prodi_id');
        // return $this->belongsTo(Nama_Model::class, 'foreign_key');
        // 1 prodi 1 fakultas belongsTo
    }
}
