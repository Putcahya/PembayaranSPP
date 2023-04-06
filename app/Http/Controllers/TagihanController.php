<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Spp;
use App\Models\Tagihan;
use App\Models\User;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function viewTagihan($id)
    {
        $data['siswa']= User::where('id', $id)->get();
        $dat = User::select('id_spp')->where('id', $id)->first();
        $data['tagihan']= Tagihan::with(['siswa'])->where('id_siswa', $id)->where('tahun', $dat->id_spp)->get();

        return view('admin.viewTagihan', $data);
    }
    public function bayar(Request $request)
    {
        $request->validate([
            'id_tagihan'=>'required',
            'id_siswa'=>'required',
            'id_petugas'=>'required',
            'tgl_bayar'=>'required',
            'nominal'=>'required',
        ]);

        $data = [
            'id_petugas'=>request()->id_petugas,
            'id_siswa'=>request()->id_siswa,
            'id_tagihan'=>request()->id_tagihan,
            'tgl_bayar'=>request()->tgl_bayar,
            'nominal'=>request()->nominal,
        ];
        $spp_id = Pembayaran::create($data)->id_tagihan;

        Tagihan::where('id', $spp_id)->update([
            'status'=>'Dibayar',
        ]);

        return redirect()->back()->with('success', 'Pembayaran SPP Berhasil');
    }
}