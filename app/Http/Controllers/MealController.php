<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealController extends Controller
{
    public function top() {
      $meal = null;
      $categories = Category::all();
      return view('top',['meal' => $meal,'categories'=>$categories] );  
    }
    
    public function index() {
      $user = Auth::user();
      $meals = $user->meals;
      $categories = Category::all();
      return view('index', ['meals' => $meals, 'categories' => $categories]);
    }

    public function search(Request $request) {
      $meals = Meal::doSearch($request->name,$request->category_id,$request->difficulty,$request->min_cost,$request->max_cost);
      $categories = Category::all();
      if($meals->all() == null) {
        $error = '検索結果がヒットしませんでした';
      }else {
        $error = null;
      }
      return view('index',compact('meals','categories','error'));
    }

    public function random(Request $request) {
      $request->name = null;
      $meals = Meal::doSearch($request->name,$request->category_id,$request->difficulty,$request->min_cost,$request->max_cost);
      try {
        $meal = $meals->random();
        $error = null;
      } catch (\Throwable $th) {
          $meal = null;
          $error = '検索結果にヒットしませんでした';
      } 
      $categories = Category::all();
      return view('top',['meal' => $meal,'categories'=>$categories,'error'=>$error] );  
    }
    
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

    public function show(Meal $meal) {
      return view('show' ,['meal' => $meal]);
    }

    public function edit(Meal $meal) {
      $categories = Category::all();
      return view('edit' ,['meal' => $meal , 'categories' => $categories]);
    }

    public function update(Meal $meal , Request $request) {
      $form_content = $request->all();
      unset($form_content['_token']);
      $meal->fill($form_content)->save();
      return redirect('/meals/'.$meal->id);
    }

    public function delete(Meal $meal) {
      $meal->delete();
      return redirect('/meals');
    }
}

