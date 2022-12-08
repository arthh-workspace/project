<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD:app/Models/Admin.php
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
=======
    // protected $fillable = [
    //     'foto',
    //     'username',
    //     'name',
    //     'email',
    //     'password',
    //     'role'
    // ];
    protected $guarded = [];
>>>>>>> 64a1ed44b9a73acea72eae6a2fa673fa7563f383:app/Models/User.php

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
