<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPrediksiController extends Controller
{
    public function index(){
        //mengambil data dari tabel 
        $data_obat = DB::table('data-obat')->get();

        //mengirim data ke view 
        return view('pages.features-data-prediksi', ['type_menu' => 'features'], ['data_obat' => $data_obat]);
    }
    public function add(){
        $data_obat = DB::table('data-obat')->get();

        return view('pages.features-data-prediksi-add', ['type_menu' => 'features'],  ['data_obat' => $data_obat]);
    }
}
