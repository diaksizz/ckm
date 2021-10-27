<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function allArtikel()
    {
      $artikel = Blog::paginate(6);

      return view('pelanggan.Artikel.index', compact('artikel'));
    }

    public function detailArtikel($id)
    {
        $artikel = Blog::where('id',$id)->first();
        $komentars = Komentar::where('id_blog',$artikel->id_blog)->get();
        $countkomen= Komentar::where('id_blog',$artikel->id_blog)->count();
        $news = Blog::orderBy('created_at', 'desc')->take(5)->get();

        return view('mahasiswa.Artikel.detailArtikel', compact('artikel','komentars','countkomen','news'));
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
