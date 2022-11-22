<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public function meal(){
        return $this->hasOne('App\Models\Meal');
    }
}
