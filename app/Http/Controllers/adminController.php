<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class adminController extends Controller
{
    public function dashboard(){


        return view('admin.dashboard.index');
    }


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
          $file = $request->file('foto');
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

    public function detail($id)
     {
          $data = Blog::find($id);
          $id = $id;
          return view('admin.artikel.edit_artikel', compact('data','id'));
    }
    public function update_artikel(Request $request, $id)
    {
          $id = $id;
          $request->validate([
              'judul' => 'required',
              'isi' => 'required',
          ]);
          if($request->hasFile('foto')){
              // dd($request->file('foto'));
              $file = $request->file('foto');
              $original = $file->getClientOriginalName();
              $original2 = pathinfo($original, PATHINFO_FILENAME);
              $file_name = Str::slug($original2,"-");
              $imageName = $file_name.'-'.time().'.'.$file->extension();
              $file->storeAs('public/images/artikel/',$imageName);
              $request->validate([
                  'foto' =>'required'
              ]);

              Blog::where("id", $id)->update(['foto'=>$imageName]);
          }

          Blog::where("id", $id)->update($request->except(['_token','_method','foto']));

          return redirect()->route('artikels');
    }
    public function hapus_artikel($id)
    {
          Blog::destroy($id);
          return redirect()->back();
    }
}
