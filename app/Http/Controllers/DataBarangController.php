<?php

namespace App\Http\Controllers;
use App\Models\dataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    public function barang(){
        $data = dataBarang::all();
        return view('dataBarang', compact('data'));
    }

    public function tambahDataBarang()
    {
        return view ('tambahDataBarang');
    }
    public function insertDataBarang(Request $request)
    {
        dataBarang::create($request->all());
        return redirect()->route('Barang')->with ('success', 'Data berhasil di Tambahkan');
    }

    public function editDataBarang($KodeBarang)
    {
        $data = dataBarang::find($KodeBarang);
        return view('editDataBarang', compact('data'));
    }

    public function updateDataBarang(Request $request, $KodeBarang)
    {
        $data = dataBarang::find($KodeBarang);
        $data->NamaBarang = $request->input('NamaBarang');
        $data->Satuan = $request->input('Satuan');
        $data->HargaSatuan = $request->input('HargaSatuan');
        $data->Stok = $request->input('Stok');
        $data->save();
        return redirect()->route('Barang')->with('success', 'Data berhasil di Update');
    }
    public function deleteDataBarang(Request $request, $KodeBarang)
    {
        $data = dataBarang::find($KodeBarang);
        $data->delete();
        return redirect()->route('Barang')->with('success', 'Data berhasil dihapus');
    }
    
}
