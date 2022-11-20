@extends('layouts.parent')

@section('content')
<div class="create-container">
  <h1 class="create-container__title">レシピ作成</h1>
  <form action="/meals/create" method="POST" class="create-form"enctype="multipart/form-data">
    @csrf
    <div class="create-form__name-div">
      <label for="name" class="create-form__name-lab">料理名</label>
      <input type="text" class="create-form__name-inp" id="name" name="name">
    </div>
    <div class="create-form__img-div">
      <label for="img" class="create-form__img-lab">画像</label>
      <input type="file" class="create-form__img-inp" id="name" name="img">
    </div>
    <div class="create-form__category-div">
      <span class="create-form__category-span">カテゴリー</span>
      <select name="category_id" id="category_id" class="create-form__category-select">
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="create-form__difficulty-div">
      <span class="create-form__difficulty-span">難易度</span>
      <input type="radio" name="difficulty" class="create-form__difficulty-inp" id="difficult" value="1">
      <label for="difficult">難しい</label>
      <input type="radio" name="difficulty" class="create-form__difficulty-inp" id="usually" value="2">
      <label for="usually">普通</label>
      <input type="radio" name="difficulty" class="create-form__difficulty-inp" id="easy" value="3">
      <label for="easy">簡単</label>
    </div>
    <div class="create-form__cost-div">
      <label for="cost">コスト</label>
      <input type="number" class="create-form__cost-int" id="cost" min="0" name="cost">
      <span class="yen">円</span>
    </div>
    <div class="create-form__way-div">
      <label for="way">作り方</label>
      <textarea class="create-form__way-text" id="way" name="way"cols="30" rows="10"></textarea>
    </div>
    <input type="submit" class="" value="作成">
  </form>
</div>
@endsection