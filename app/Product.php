<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'color_id', 'price', 'material'];

    public function color()
    {
        return $this->belongsTo('App\Color');
    }
}
