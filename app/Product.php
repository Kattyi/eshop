<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'color_id', 'price', 'material', 'gender'];

    public function color()
    {
        return $this->belongsTo('App\Color');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public static function getGender(String $gender)
    {
        if ($gender == "Man")
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
}
