<?php

namespace App\Observers;

use App\Models\Log;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;

class PembayaranObserver
{
    public function created(Pembayaran $user)
    {
        Log::create([
            'model'=>'User',
            'person'=>Auth::user()->name,
            'aksi'=>'Bayar SPP',
            'log'=>'Data pembayaran telah ditambahkan oleh '.Auth::user()->name,
        ]);
    }
}
