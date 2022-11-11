<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // use HasFactory;
    protected $guarded=[];
    // public function products(){
    //     return $this->belongsTo(Product::class);
    // }

    public function products()
    {
        return $this->morphTo(Product::class);
    }

}