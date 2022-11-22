@extends('layouts.parent')

@section('content')
<div class="create-wrapper">
  <h1 class="create-wrapper__title title">レシピ作成</h1>
  <form action="/meals/{{$meal->id}}/update" method="POST" class="create-form"enctype="multipart/form-data" class="create-form">
    @csrf
    @method('PUT')
    <div class="create-form__name-div">
      <label for="name" class="create-form__name-lab label">料理名</label>
      <input type="text" class="create-form__name-inp create-form-inp" id="name" name="name"  value="{{$meal->name}}">
    </div>
    <div class="create-form__img-div">
      <label for="img" class="create-form__img-lab label">画像</label>
      <input type="file" class="create-form__img-inp" id="name" name="img">
    </div>
    <div class="create-form__category-div">
      <label class="create-form__category-span label">カテゴリー</label>
      <select name="category_id" id="category_id" class="create-form__category-select">
        @foreach ($categories as $category)
        <option {{ $meal->isSelectedCategory($category->id) }} value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="create-form__difficulty-div">
      <label class="create-form__difficulty-span label">難易度</label>
      <input type="radio" name="difficulty" class="create-form__difficulty-inp" id="difficult" value="1"
        @if($meal->difficulty == 1)
        checked
          @endif
        >
      <label for="difficult">難しい</label>
      <input type="radio" name="difficulty" class="create-form__difficulty-inp" id="usually" value="2"
        @if($meal->difficulty == 2)
        checked
          @endif
        >
      <label for="usually">普通</label>
      <input type="radio" name="difficulty" class="create-form__difficulty-inp" id="easy" value="3"
        @if($meal->difficulty == 3)
        checked
          @endif
        >
      <label for="easy">簡単</label>
    </div>
    <div class="create-form__cost-div">
      <label for="cost" class="create-form__cost-span label">コスト</label>
      <input type="number" class="create-form__cost-int create-form-inp" id="cost" min="0" name="cost" value="{{$meal->cost}}">
      <span class="yen">円</span>
    </div>
    <div class="create-form__ingredient-div">
      <label for="ingredient" class="create-form__ingredient-span label">材料メモ</label>
      <textarea class="create-form__ingredient-text create-form-inp" id="ingredient" name="ingredient"cols="30" rows="10">{{$meal->ingredient}}</textarea>
    </div>
    <div class="create-form__way-div">
      <label for="way" class="create-form__way-span label">作り方</label>
      <textarea class="create-form__way-text create-form-inp" id="way" name="way"cols="30" rows="10">{{$meal->way}}</textarea>
    </div>
    <input type="submit" class="create-form__submit-button button" value="更新">
  </form>
</div>

@endsection
