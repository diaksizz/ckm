<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $guarded= [];

    public function Produk()
    {
        return $this->hasMany('App\Models\Produk','id_produk');
    }
}
