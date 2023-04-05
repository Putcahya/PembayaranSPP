<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Tagihan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaUserController extends Controller
{
    public function viewDetail($id)
    {
        $data['pembayaran']= Pembayaran::with(['tagihan.siswa'])->where('id_tagihan', $id)->get();
        return view('siswa.viewDetail' , $data);
    }
    public function tampilanSiswa()
    {
        $data['pembayaran']= Pembayaran::with(['tagihan.siswa'])->where('id_tagihan', )->get();
        $data['tagihan']= Tagihan::with(['siswa.spp'])->where('id_siswa', Auth::user()->id)->get();
        return view('siswa.viewSiswa',$data );
    }
    public function viewProfile($id)
    {
        $data['siswa'] = User::where('id', $id)->get();
        return view('siswa.viewProfile', $data);
    }
    public function ubahProfile(Request $request, $id)
    {
        if (request()->new_password) {
            $password= Hash::make(request()->new_password);
        } else {
            $password = request()->password;
        }
        
        if (request()->new_email) {
            $email= request()->new_email;
        } else {
            $email = request()->email;
        }
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:5',
        ]);
        User::where('id', $id)->update([
            'email'=>$email,
            'password'=>$password,
        ]);

        return redirect()->back()->with('update', 'Data berhasil disimpan');
    }
}
