<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $fillable = ['id_dosen', 'id_koor', 'hari', 'Ruang', 'Waktu'];

    protected $dates = ['hari'];

    public function dosen()
    {
     return $this->belongsTo('App\Models\dosen', 'id_dosen') && $this ->belongsTo('App\Models\koordinator', 'id_koor');
    }
    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'perkuliahans');
    }
    public static function getIdDosenyId($id){
        return koordinator::where('id', $id)->pluck('id_dosen')->first();
    }
}
