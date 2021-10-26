<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'pesans';
    protected $guarded= [];

    public function User()
    {
        return $this->hasMany(Pesan::class,'id');
    }
}
