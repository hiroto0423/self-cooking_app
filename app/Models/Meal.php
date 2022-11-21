<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function category()
    {
        return $this->BelongsTo(category::class);
    }

    public function image()
    {
        return $this->BelongsTo(Image::class);
    }

    public function isSelectedCategory($category_id) {
        if ($this->category_id == $category_id) {
            return 'selected';
        } else {
            return '';
        };
    }
}