<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $search = Request::get('search'); // Mendapatkan nilai pencarian dari query string

        // Query data mahasiswa dengan filter pencarian
        $query = Mahasiswa::orderBy('nim', 'desc');
        if ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        }
        
        $mahasiswas = Mahasiswa::all();
        return view('home', compact('mahasiswas'));
    }
}