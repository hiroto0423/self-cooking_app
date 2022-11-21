@extends('layouts.parent')

@section('content')
<div class="edit-wrapper">
  <h1 class="edit-wrapper__title">レシピ編集</h1>
  <form action="/meals/{{$meal->id}}/update" method="POST" class="edit-form"enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="edit-form__name-div">
      <label for="name" class="edit-form__name-lab">料理名</label>
      <input type="text" class="edit-form__name-inp" id="name" name="name" value="{{$meal->name}}">
    </div>
    <div class="edit-form__img-div">
      <label for="img" class="edit-form__img-lab">画像</label>
      <input type="file" class="edit-form__img-inp" id="name" name="img">
    </div>
    <div class="edit-form__category-div">
      <span class="edit-form__category-span">カテゴリー</span>
      <select name="category_id" id="category_id" class="edit-form__category-select">
        @foreach ($categories as $category)
        <option {{ $meal->isSelectedCategory($category->id) }} value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="edit-form__difficulty-div">
      <span class="edit-form__difficulty-span">難易度</span>
      <input type="radio" name="difficulty" class="edit-form__difficulty-inp" id="difficult" value="1"
        @if($meal->difficulty == 1)
        checked
        @endif
      >
      <label for="difficult">難しい</label>
      <input type="radio" name="difficulty" class="edit-form__difficulty-inp" id="usually" value="2"
        @if($meal->difficulty == 2)
          checked
        @endif
      >
      <label for="usually">普通</label>
      <input type="radio" name="difficulty" class="edit-form__difficulty-inp" id="easy" value="3"
        @if($meal->difficulty == 2)
        checked
        @endif
      >
      <label for="easy">簡単</label>
    </div>
    <div class="edit-form__cost-div">
      <label for="cost">コスト</label>
      <input type="number" class="edit-form__cost-int" id="cost" min="0" name="cost" value="{{$meal->cost}}">
      <span class="yen">円</span>
    </div>
    <div class="edit-form__way-div">
      <label for="way">作り方</label>
      <textarea class="edit-form__way-text" id="way" name="way"cols="30" rows="10">{{$meal->way}}</textarea>
    </div>
    <input type="submit" class="" value="更新">
  </form>
</div>
@endsection