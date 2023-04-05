<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Log;
use App\Models\Pembayaran;
use DataTables;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    protected $user = null;
    public function __construct() {
        $this->middleware('auth');
    }
    public function viewAdmin()
    {
        $data['petugas']= User::where('level', 'Petugas')->count();
        $data['siswa']= User::where('level', 'Siswa')->count();
        $data['pembayaran']= Pembayaran::all()->count();
        $data['log1']=Log::where('aksi','create')->orWhere('aksi','update')->orWhere('aksi','delete')->orderBy('id', 'DESC')->get();
        $data['log2']=Log::where('aksi', 'Bayar SPP')->orderBy('id', 'DESC')->get();
        return view('admin.viewDashboard', $data);
    }
    public function viewProfile($id)
    {
        $data['profile'] = User::where('id', $id)->get();
        return view('admin.viewProfile', $data);
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
