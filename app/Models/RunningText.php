<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RunningText extends Model
{
    protected $table = 'running_texts'; // sesuai dengan tabel kamu
    public $timestamps = false; // karena kolom created_at dan updated_at kamu NULL
}