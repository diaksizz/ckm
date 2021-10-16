<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class adminController extends Controller
{
      public function artikelIndex(){

         $blog = Blog::all();

         return view('admin.artikel.index', compact('artikels'));
      }
      public function artikelAdd(){

          $id_user = Auth::user()->id; //get id user admin
          $produks = Produk::all(); //get data produk terus digunakan di scroll item

         return view('admin.artikel.addArtikel', compact('kategoris','id_user'));
      }
      public function storeArtikel(Request $request){
          $file = $request->file('foto_artikel');
          $original = $file->getClientOriginalName();
          $original2 = pathinfo($original, PATHINFO_FILENAME);
          $file_name = Str::slug($original2, "-");

          $imageName = $file_name . '-' . time() . '.' . $file->extension();
          $file->storeAs('public/images/artikel', $imageName);

          $store = Blog::create([
              'id_user' => $request->id_user,
              'id_produk' => $request->produk_artikel,
              'judul' => $request->judul,
              'isi' => $request->isi,
              'foto' => $imageName,
          ]);

          return redirect()->route('artikelIndex')->with('success','Tambah Artikel Berhasil');
      }
}
