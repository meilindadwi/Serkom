<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; // Import model Mahasiswa jika belum diimpor

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search'); // Mendapatkan nilai pencarian dari query string

        // Query data mahasiswa dengan filter pencarian
        $query = Mahasiswa::orderBy('nim', 'desc');
        if ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        }

        // Ambil data mahasiswa sesuai dengan ketentuan
        $mahasiswas = $query->get();
        // $mahasiswas = Mahasiswa::orderBy('nim', 'desc')->get();
        $total_mahasiswa = Mahasiswa::count();
        $total_laki = Mahasiswa::where('gender', 'Laki-laki')->count();
        $total_perempuan = Mahasiswa::where('gender', 'Perempuan')->count();

        // Kembalikan view home.blade.php dengan data yang diperlukan
        return view('home', compact('mahasiswas', 'total_mahasiswa', 'total_laki', 'total_perempuan'));
    }
}