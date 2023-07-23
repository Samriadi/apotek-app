<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPenjualanController extends Controller
{
    public function index(){
        //mengambil data dari tabel 
        $data_penjualan = DB::table('data-penjualan')->get();

        //mengirim data ke view 
        return view('pages.features-data-penjualan', ['type_menu' => 'features'], ['data_penjualan' => $data_penjualan]);
    }
    public function add(){
        $data_obat = DB::table('data-obat')->get();

        return view('pages.features-data-penjualan-add', ['type_menu' => 'features'],  ['data_obat' => $data_obat]);
    }
    public function store(Request $request)
    {
        // insert data ke table 
        DB::table('data-penjualan')->insert([
            'tanggal_penjualan' => $request->post('tanggal_penjualan'),
            'nama_obat' => $request->post('nama_obat'),
            'jumlah_penjualan' => $request->post('jumlah_penjualan')
        ]);
        // alihkan halaman ke halaman 
        return redirect('features-data-penjualan');
    }
}
