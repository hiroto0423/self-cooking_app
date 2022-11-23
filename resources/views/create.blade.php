@extends('layouts.parent')

@section('content')
<div class="create-wrapper">
  <h1 class="create-wrapper__title title">レシピ作成</h1>
  <form action="/meals/store" method="POST" class="create-form"enctype="multipart/form-data" class="create-form">
    @csrf
    @if (count($errors) > 0)
    <p class="error-detection">入力に問題があります</p>
    @endif
    <div class="create-form__name-div">
      <label for="meal-name" class="create-form__name-lab label">料理名</label>
      <input type="text" class="create-form__name-inp create-form-inp" id="meal-name" name="name">
      <p class="validetion-error-message" id="error-name">{{$errors->first('name')}}</p>
      <span class="real-check" id="name-check">※料理名を入力してください</span>
    </div>
    <div class="create-form__img-div">
      <label for="img" class="create-form__img-lab label">画像</label>
      <input type="file" class="create-form__img-inp" id="name" name="img">
      <p class="validetion-error-message">{{$errors->first('img')}}</p>
    </div>
    <div class="create-form__category-div">
      <label class="create-form__category-span label">カテゴリー</label>
      <select name="category_id" id="category_id" class="create-form__category-select">
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
      <p class="validetion-error-message">{{$errors->first('category_id')}}</p>
    </div>
    <div class="create-form__difficulty-div">
      <label class="create-form__difficulty-span label">難易度</label>
      <input type="radio" name="difficulty" class="create-form__difficulty-inp" id="difficult" value="1">
      <label for="difficult">難しい</label>
      <input type="radio" name="difficulty" class="create-form__difficulty-inp" id="usually" value="2" checked>
      <label for="usually">普通</label>
      <input type="radio" name="difficulty" class="create-form__difficulty-inp" id="easy" value="3">
      <label for="easy">簡単</label>
      <p class="validetion-error-message">{{$errors->first('difficulty')}}</p>
    </div>
    <div class="create-form__cost-div">
      <label for="meal-cost" class="create-form__cost-span label">コスト</label>
      <input type="number" class="create-form__cost-int create-form-inp" id="meal-cost" min="0" name="cost">
      <span class="yen">円</span>
      <p class="validetion-error-message">{{$errors->first('cost')}}</p>
      <p class="validetion-error-message" id="error-cost">{{$errors->first('cost')}}</p>
      <span class="real-check" id="cost-check">※コストを入力してください</span>
    </div>
    <div class="create-form__ingredient-div">
      <label for="meal-ingredient" class="create-form__ingredient-span label">材料メモ</label>
      <textarea class="create-form__ingredient-text create-form-inp" id="meal-ingredient" name="ingredient"cols="30" rows="10"></textarea>
      <p class="validetion-error-message" id="error-ingredient">{{$errors->first('ingredient')}}</p>
      <span class="real-check" id="ingredient-check">※材料メモを入力してください</span>
    </div>
    <div class="create-form__way-div">
      <label for="meal-way" class="create-form__way-span label">作り方</label>
      <textarea class="create-form__way-text create-form-inp" id="meal-way" name="way"cols="30" rows="10"></textarea>
      <p class="validetion-error-message"id="error-way">{{$errors->first('way')}}</p>
      <span class="real-check" id="way-check">※作り方を入力してください</span>
    </div>
    <input type="submit" class="create-form__submit-button button" value="作成">
  </form>
</div>
<script src="{{ asset('js/validation.js') }}"></script>
@endsection