<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;
    protected $fillable = [
        'jurusan_id',
        'order',
        'is_active',
        'buku_title',
        'buku_pdf',
    ];
    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }
}