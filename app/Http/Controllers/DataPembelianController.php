<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPembelianController extends Controller
{
    public function index(){
        //mengambil data dari tabel 
        $data_obat = DB::table('data-obat')->get();

        //mengirim data ke view 
        return view('pages.features-data-pembelian', ['type_menu' => 'features'], ['data_obat' => $data_obat]);
    }
}
