<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rps extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function matkul()
    {
        return $this->belongsTo(matkul::class);
    }
    public function rps_pertemuan()
    {
        return $this->hasMany(rps_pertemuan::class);
    }
}
