<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $guarded= [];

    public function Kategori()
    {
        return $this->belongsTo('App\Models\Kategori','id_kategori','id_kategori');
    }
    public function User()
    {
        return $this->belongsTo(User::class,'id');
    }
}
