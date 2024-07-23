<?php

namespace App\Models;

use App\Models\Sekolah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'namapeserta',
        'nis',
        'sekolah_id',
        'jurusan'
    ];

    protected $table = 'pesertas';

    //relasi ke tabel sekolah
    public function sekolah(){
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'id');
    }
}
