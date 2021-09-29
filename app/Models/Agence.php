<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Corcel\Model\Post as Corcel;

class Agence extends Model
{
    //protected $connection = 'unacoopec';
    use HasFactory;


    public function scopeFilter($query, array $filter){


    }
}
