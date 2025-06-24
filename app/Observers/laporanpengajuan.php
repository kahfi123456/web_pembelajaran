<?php

namespace App\Observers;

use App\Mail\LaporanMasukMail;
use App\Models\suratpengajuan;
use Illuminate\Support\Facades\Mail;

class laporanpengajuan
{
    public function created(suratpengajuan $laporan): void
    {
        Mail::to('aliharahap125@gmail.com')->send(new LaporanMasukMail($laporan));
    }
}