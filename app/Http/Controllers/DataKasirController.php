<?php

namespace App\Http\Controllers;
use App\Models\dataKasir;
use Illuminate\Http\Request;

class DataKasirController extends Controller
{
    public function dataKasir(){
        $data = dataKasir::all();
        return view('dataKasir', compact('data'));
    }
}
