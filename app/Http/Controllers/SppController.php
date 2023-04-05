<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }
    public function viewSpp()
    {
        $data['spp'] = Spp::all();
        return view('admin.viewSpp', $data);
    }
    public function tambahSpp(Request $request)
    {
        $request->validate([
            'tahun'=>'required',
            'nominal'=>'required',
        ]);

        $data = [
            'tahun'=>request()->tahun,
            'nominal'=>request()->nominal,
        ];
        Spp::create($data);
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
    public function ubahSpp(Request $request, $id)
    {
        $request->validate([
            'tahun'=>'required',
            'nominal'=>'required',
        ]);
        Spp::where('id', $id)->update([
            'tahun'=>request()->tahun,
            'nominal'=>request()->nominal,
        ]);

        return redirect()->back()->with('update', 'Data berhasil disimpan');
    }
    public function hapusSpp($id)
    {
        Spp::where('id', $id)->delete(); 
        return redirect()->back()->with('delete', 'Data berhasil dihapus');
    }
}
