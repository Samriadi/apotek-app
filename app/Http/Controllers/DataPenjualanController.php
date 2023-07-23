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

}
