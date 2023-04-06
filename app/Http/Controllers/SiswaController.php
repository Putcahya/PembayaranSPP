<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Spp;
use App\Models\Tagihan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function viewSiswa()
    {
        $data['siswa']= User::with('kelas')->where('level', 'siswa')->get();
        $data['kelas']=Kelas::all(); 
        $data['spp']=Spp::all();
        return view('admin.viewSiswa', $data);
    }
    public function tambahSiswa(Request $request)
    {
        $request->validate([
            'nisn'=>'required',
            'nis'=>'required',
            'id_kelas'=>'required',
            'id_spp'=>'required',
            'name'=>'required',
            'email'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
        ]);
        $siswa = [
            'nisn'=>request()->nisn,
            'nis'=>request()->nis,
            'id_kelas'=>request()->id_kelas,
            'id_spp'=>request()->id_spp,
            'name'=>request()->name,
            'email'=>request()->email,
            'alamat'=>request()->alamat,
            'telepon'=>request()->telepon,
            'level'=>'siswa',
            'password'=>Hash::make(request()->nis),
        ];
        $siswa_id= User::create($siswa)->id;

        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Januari',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Februari',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Maret',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'April',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Mei',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Juni',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Juli',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Agustus',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'September',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Oktober',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'November',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Desember',
            'tahun'=>request()->id_spp,
            'status'=>'Belum Dibayar',
        ]);

        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Januari',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Februari',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Maret',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'April',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Mei',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Juni',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Juli',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Agustus',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'September',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Oktober',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'November',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Desember',
            'tahun'=>request()->id_spp+1,
            'status'=>'Belum Dibayar',
        ]);

        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Januari',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Februari',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Maret',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'April',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Mei',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Juni',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Juli',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Agustus',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'September',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Oktober',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'November',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        Tagihan::create([
            'id_siswa'=>$siswa_id,
            'bulan'=>'Desember',
            'tahun'=>request()->id_spp+2,
            'status'=>'Belum Dibayar',
        ]);
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
    public function hapusSiswa($id)
    {
        User::where('id', $id)->first()->delete();
        return redirect()->back()->with('delete', 'Data berhasil dihapus');
    }
    public function ubahSiswa(Request $request, $id)
    {
        if (request()->new_password) {
            $password= Hash::make(request()->new_password);
        } else {
            $password = request()->password;
        }
        $request->validate([
            'nisn'=>'required',
            'nis'=>'required',
            'id_kelas'=>'required',
            'id_spp'=>'required',
            'name'=>'required',
            'email'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
        ]);
        User::where('id', $id)->first()->update([
            'nisn'=>request()->nisn,
            'nis'=>request()->nis,
            'id_kelas'=>request()->id_kelas,
            'id_spp'=>request()->id_spp,
            'name'=>request()->name,
            'email'=>request()->email,
            'alamat'=>request()->alamat,
            'telepon'=>request()->telepon,
            'password'=>$password,
            'level'=>'siswa',
        ]);
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
