<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files'; // Nama tabel di database
    protected $fillable = ['faculty', 'filename', 'file_path', 'created_at']; // Kolom yang bisa diisi secara massal
}