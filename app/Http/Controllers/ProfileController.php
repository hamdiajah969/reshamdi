<?php

namespace App\Http\Controllers;

use App\Models\profil_sekolah;
use Illuminate\Http\Request;
use Illuminnate\Support\Facades\Crypt;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $data['profile_sekolah'] = profil_sekolah::all();
        return view('admin.profile', $data);
    }

    public function create(){
        $data ['profil_sekolahs'] = profil_sekolah::all();
        return view("admin.profile.tambah_profile");
    }

    public function store(Request $request){
        $request->validate([
            'nama_sekolah' => 'required|string|max:40',
            'kepala_sekolah' => 'required|string|max:40',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'npsn' => 'required|string|max:10|unique:profil_sekolahs',
            'alamat' => 'required|string',
            'kontak' => 'nullable|string|max:15',
            'visi_misi' => 'required|string',
            'tahun_berdiri' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'deskripsi' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto', 'public');
        }

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logo', 'public');
        }

        profil_sekolah::create($data);

        return redirect()->route('admin.profile')->with('success', 'Profil sekolah berhasil ditambahkan.');
    }
}
