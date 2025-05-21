<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    use Notifiable,HasFactory;

    protected $table = 'mahasiswas';

    protected $fillable = [
        'name',
        'email',
        'nim',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}