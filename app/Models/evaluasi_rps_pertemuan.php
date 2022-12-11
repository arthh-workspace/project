<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluasi_rps_pertemuan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rps_pertemuan()
    {
        return $this->belongsTo(rps_pertemuan::class);
    }
}
