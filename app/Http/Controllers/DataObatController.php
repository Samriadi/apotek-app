<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataObat;

class DataObatController extends Controller
{
    public function index(){
        //mengambil data dari tabel 
        $data_obat = DB::table('data-obat')->get();

        //mengirim data ke view 
        return view('pages.features-data-obat', ['type_menu' => 'features'], ['data_obat' => $data_obat]);
    }
    public function store(Request $request)
    {
        // insert data ke table 
        DB::table('data-obat')->insert([
            'nama_obat' => $request->post('nama_obat'),
            'stock' => $request->post('stock'),
            'satuan' => $request->post('satuan')
        ]);
        // alihkan halaman ke halaman 
        return redirect('features-data-obat');
    }
    public function edit($id)
    {
        // mengambil data data_obat berdasarkan id yang dipilih
        $data_obat = DB::table('data-obat')->where('id',$id)->get();
        
        // passing data data_obat yang didapat ke view edit.blade.php
        return view('pages.features-data-obat-update', ['type_menu' => 'features'], ['data_obat' => $data_obat]);
    
    }
    public function update(Request $request)
    {
        // update data 
        DB::table('data-obat')->where('id',$request->id)->update([
            'nama_obat' => $request->post('nama_obat'),
            'stock' => $request->post('stock'),
            'satuan' => $request->post('satuan')
        ]);
        // alihkan halaman ke halaman 
        return redirect('features-data-obat');
    }
    public function delete($id)
    {
        // menghapus data  berdasarkan id yang dipilih
        DB::table('data-obat')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman 
        return redirect('features-data-obat');
    }
}
