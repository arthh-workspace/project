<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rps_pertemuan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rps()
    {
        return $this->belongsTo(rps::class);
    }
    public function evaluasi_rps_pertemuan()
    {
        return $this->hasMany(rps_pertemuan::class);
    }
}
