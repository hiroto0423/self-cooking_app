<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealController extends Controller
{


  public function create() {
    $categories = Category::all();
    return view('create' ,['categories' => $categories]);
  }

  public function store(Request $request) {
    $dir = 'meal-imges';
    $file_name = $request->file('img')->getClientOriginalName();
    $request->file('img')->storeAs('public/' . $dir, $file_name);
    $image = new Image();
    $image->name = $file_name;
    $image->path = 'storage/' . $dir . '/' . $file_name;
    $image->save();
    
    $form_content = $request->all();
    unset($form_content['_token']);
    unset($form_content['img']);
    $form_content['user_id'] = Auth::id();
    $form_content['image_id'] = $image->id;
    $meal = new Meal;
    $meal->fill($form_content)->save();
    return redirect('/meals');
  }
}

