<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded= [];

    public function Blog()
    {
        return $this->hasMany('App\Models\Blog','id');
    }

}
