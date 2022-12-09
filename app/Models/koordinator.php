<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koordinator extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_dosen', 'id_matkul', 'semester'];

    #relasi one to one
    public function dosen(){
        return $this->belongsTo('App\Models\dosen', 'id_dosen');
    }

    #relasi one to many
    public function dosenmatkul(){
        $this ->hasMany('App\Models\jadwal', 'id_koor');
    }
}
