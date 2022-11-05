<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $table = 'mahasiswas';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
