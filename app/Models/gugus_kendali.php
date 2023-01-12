<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gugus_kendali extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_dosen'];

    public function dosen(){
        return $this->belongsTo('App\Models\Dosen', 'id_dosen');
    }
    public static function getIdDosenyId($id){
        return koordinator::where('id', $id)->pluck('id_dosen')->first();
    }
}
