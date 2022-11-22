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
      return view('top',['meal' => $meal] );  
    }
    
    public function index() {
      $user = Auth::user();
      $meals = $user->meals;
      $categories = Category::all();
      return view('index', ['meals' => $meals, 'categories' => $categories]);
    }

    public function search(Request $request) {
      $meal = Meal::query();
      if($request->category_id !== null) {
        $meal->where('category_id',$request->category_id);
      }
      if($request->difficulty !== null) {
        $meal->where('difficulty',$request->difficulty);;
      }
      if($request->min_cost !== null && $request->max_cost !== null) {
        $meal->whereBetween('cost', [$request->min_cost, $request->max_cost]);
      }
      if($request->min_cost !== null && $request->max_cost == null ) {
        $meal->where('cost','>=',$request->min_cost );
      }
      if($request->min_cost == null && $request->max_cost !== null ) {
        $meal->where('cost','<=',$request->max_cost );
      }
      if($request->name !== null) {
        $meal->where( 'name', 'like', '%'.$request->name.'%' );
      }

      $meals = $meal->get();
      $categories = Category::all();
      return view('index',compact('meals','categories'));
    }

    public function random() {
      $user = Auth::user();
      $meal = $user->meals->random();
      return view('top', ['meal' => $meal]);
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

