<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ManagementUserController extends Controller
{
    // Fungsi ini mirip dengan fungsi index pada class ManagementUserController, hanya saja tidak berada di dalam sebuah class.
    // variabel $nama dan $matkul akan dikirim ke view menggunakan fungsi compact.
    public function index(){
        // return "halo ini adalah method index, dalam controller ManagementUser";
        // return "Method ini biasanya digunakan untuk mengambil semua data user";
        $nama = "Akbar Firmansyah";
        $pelajaran = ["Mobile","Web","Kalkulus"];
        return view('home', compact('nama','pelajaran'));
    }
    public function create(){
        return "Method ini biasanya digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store(Request $request){
        return "Method ini biasanya digunakan untuk menciptakan data user yang baru";
    }
    public function show($id){
        return "Method ini biasanya digunakan untuk mengambil satu data user dengan id = $id";
    }
    public function edit($id){
        return "Method ini biasanya digunakan untuk menampilkan form untuk mengubah data edit dengan id =$id";
    }
    public function update(Request $request, $id){
        return "Method ini biasanya digunakan untuk mengubah data user dengan id = $id";
    }
    public function destroy($id){
        return "Method ini biasanya digunakan untuk menghapus data user dengan id = $id";
    }
}