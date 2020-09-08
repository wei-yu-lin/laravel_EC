<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'imageurl'];
    
    public function file()
    {
        return $this->belongsTo('App\File');
    }
}