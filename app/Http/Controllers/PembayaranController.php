<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Spp;
use App\Models\User;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function viewPembayaran()
    {
        $data['siswa']= User::with('kelas')->where('level', 'siswa')->get();
        $data['kelas']=Kelas::all(); 
        $data['spp']=Spp::all();
        return view('admin.viewPembayaran', $data);
    }
    public function detailPembayaran($id)
    {
        $data['pembayaran']= Pembayaran::with(['tagihan.siswa'])->where('id_tagihan', $id)->get();
        return view('admin.viewDetailPembayaran' , $data);
    }
    public function cetakPembayaran($id)
    {
        $data['pembayaran']= Pembayaran::with(['tagihan.siswa'])->where('id_tagihan', $id)->get();
        return view('admin.viewCetakPembayaran' , $data);
    }
    public function viewLaporan()
    {
        $data['pembayaran']=Pembayaran::all();
        return view('admin.viewLaporan', $data);
    }
    public function cetakLaporan()
    {
        $data['pembayaran']=Pembayaran::all();
        return view('admin.viewCetakLaporan', $data);
    }
}
