<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
     use HasFactory;
   protected $fillable = ['title','fakultas_id'];
   public function fakultas()
    {
        return $this->belongsTo(fakultas::class);
    }
    public function materi()
    {
        return $this->hasMany(materi::class);
    }
}