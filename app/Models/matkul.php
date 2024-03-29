<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_matkul', 'jumlah_sks'];

    public function rps()
    {
        return $this->hasMany(rps::class);
    }
}
