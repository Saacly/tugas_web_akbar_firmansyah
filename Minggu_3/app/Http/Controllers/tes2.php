<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tes2 extends Controller
{
    public function index(){
        // return "halo ini adalah method index, dalam controller ManagementUser";
        return "Method ini biasanya digunakan untuk mengambil semua data user";
        $nama = "Akbar Firmansyah";
        $pelajaran = ["Mobile","Web","Kalkulus"];
        // return view('home', compact('nama','pelajaran'));
    }
    public function store(Request $request){
        
    }
    
    
    
    
}
