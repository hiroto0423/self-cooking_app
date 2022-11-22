<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Meal extends Model
{
    use HasFactory;
    use SoftDeletes;
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

    public static function doSearch($name,$category_id,$difficulty,$min_cost,$max_cost) {
        $user_id = Auth::id();
        $meal = self::query();
        $meal->where('user_id', '=', $user_id);
        if ($category_id !== null) {
            $meal->where('category_id', $category_id);
        }
        if ($difficulty !== null) {
            $meal->where('difficulty', $difficulty);
        }
        if ($min_cost !== null && $max_cost !== null) {
            $meal->whereBetween('cost', [$min_cost, $max_cost]);
        }
        if ($min_cost !== null && $max_cost == null) {
            $meal->where('cost', '>=', $min_cost);
        }
        if ($min_cost == null && $max_cost !== null) {
            $meal->where('cost', '<=', $max_cost);
        }
        if ($name !== null) {
            $meal->where('name', 'like', '%'.$name.'%');
        }
        $meals = $meal->get();
        return $meals;
    }

}