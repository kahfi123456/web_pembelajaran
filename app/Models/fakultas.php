<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class fakultas extends Model
{
    use HasFactory;
   protected $fillable = ['title','is_active'];
   protected static function booted()
    {
        static::creating(function ($fakultas) {
            $fakultas->slug = Str::slug($fakultas->title);
        });
    }
   public function jurusans()
    {
        return $this->hasMany(jurusan::class);
    }
}