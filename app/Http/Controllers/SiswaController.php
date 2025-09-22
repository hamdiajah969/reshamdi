<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    //
    public function index(){
        return view('admin.siswa');
    }

    public function create(){
        $data['siswas'] = Siswa::all();
        return view('admin.siswa.tambah_siswa');
    }

    

}
