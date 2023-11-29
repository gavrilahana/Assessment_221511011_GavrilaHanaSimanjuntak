<?php

namespace App\Http\Controllers;
use App\Models\dataTenan;
use Illuminate\Http\Request;

class DataTenanController extends Controller
{
    public function dataTenan(){
        $data = dataTenan::all();
        return view('dataTenan', compact('data'));
    }
}
