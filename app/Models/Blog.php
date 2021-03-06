<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'blogs';
    protected $guarded= [];

    public function Komentar()
    {
        return $this->belongsTo('App\Models\Komentar','id');
    }
}
