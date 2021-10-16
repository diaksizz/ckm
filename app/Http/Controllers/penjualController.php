<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class penjualController extends Controller
{
    public function produkIndex(){

       $produks = Produk::all();

       return view('admin.produk.index', compact('produks')); 
    }
    public function produkAdd(){
        
        $id_user = Auth::user()->id; //get id user penjual
        $kategoris = Kategori::all(); //get data kategori terus digunakan di scroll item

       return view('admin.produk.addProduk', compact('kategoris','id_user')); 
    }
    public function storeProduk(Request $request){
        $file = $request->file('foto_produk');
        $original = $file->getClientOriginalName();
        $original2 = pathinfo($original, PATHINFO_FILENAME);
        $file_name = Str::slug($original2, "-");

        $imageName = $file_name . '-' . time() . '.' . $file->extension();
        $file->storeAs('public/images/produk', $imageName);

        $store = Produk::create([
            'id_user' => $request->id_user,
            'id_kategori' => $request->kategori_produk,
            'nama' => $request->nama_produk,
            'deskripsi' => $request->deskripsi_produk,
            'foto' => $imageName,
            'harga' => $request->harga_produk,
            'lokasi' => $request->lokasi_produk,
            'nomer_telp' => $request->notelp_produk,
        ]);

        return redirect()->route('produkIndex')->with('success','Tambah Produk Berhasil');
    }
}
