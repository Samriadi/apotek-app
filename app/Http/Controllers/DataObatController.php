<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataObatController extends Controller
{
    public function index(){
        //mengambil data dari tabel 
        $data_obat = DB::table('data-obat')->get();

        //mengirim data ke view 
        return view('pages.features-data-obat', ['type_menu' => 'features'], ['data_obat' => $data_obat]);
    }
    // public function store(Request $request)
    // {
    //     // insert data ke table 
    //     DB::table('data-obat')->insert([
    //         'nama_obat' => $request->nama_obat,
    //         'stock' => $request->stock,
    //         'satuan' => $request->satuan
    //     ]);
    //     // alihkan halaman ke halaman 
    //     return redirect('pages.features-data-obat');
    // }
    // public function tambah(){
    //     return view('pages.features-data-obat-add', ['type_menu' => 'features']);
    // }

}
