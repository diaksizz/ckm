<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded= [];

    public function Kategori()
    {
        return $this->belongsTo('App\Models\Kategori','id');
    }
}