<?php

// namespace App\Http\Controllers\Web;
//
// use App\Http\Controllers\Controller;
// use App\Models\Blog;
// use Carbon\Carbon;
// use Illuminate\Http\Request;
// use Illuminate\Support\Str;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function allArtikel()
    {
      return view('pelanggan.Artikel.index');
    }

    public function detailArtikel()
    {
        // $artikel = artikel::where('artikel_slug',$artikel_slug)->first();
        // $komentars = komentar_artikel::where('artikel_id',$artikel->artikel_id)->get();
        // $countkomen= komentar_artikel::where('artikel_id',$artikel->artikel_id)->count();
        // $news = artikel::orderBy('created_at', 'desc')->take(5)->get();
        //
        // return view('mahasiswa.Artikel.detailArtikel', compact('artikel','komentars','countkomen','news'));
    }

    public function listArtikel()
    {
        // $artikels =  artikel::orderBy('judul_artikel','DESC')->get();
        // $i = 1;
        // return view('admin.artikel.index',compact('i','artikels'));
    }

    public function tambah_artikel()
    {

    }

    public function store_artikel(Request $request)
    {

    }

    public function detail()
    {

    }
    public function hapus_artikel()
    {

    }



}
