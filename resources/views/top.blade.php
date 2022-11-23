@extends('layouts.parent')

@section('content')
<div class="top-wrapper">
  <h1 class="top-wrapper__title title">本日の献立を選ぶ</h1>
  <form action="/meals/random" method="get" name='randomform' class="random-form flex">
    <p class="random-form__head">絞り込む</p>
  <div class="search-form-category">
    <select name="category_id" id="" class="random-form-category pulldown">
      <option value="" class="random-form-categor__item">すべてのカテゴリー</option>
      @foreach ($categories as $category)
        <option value="{{$category->id}}" class="random-form-categor__item">{{$category->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="search-form-difficulty">
    <select name="difficulty" id="" class="random-form-difficulty pulldown">
      <option value="" class="random-form-difficulty__item">すべての難易度</option>
      <option value="1" class="random-form-difficulty__item">難しい</option>
      <option value="2" class="random-form-difficulty__item">普通</option>
      <option value="3" class="random-form-difficulty__item">簡単</option>
    </select>
  </div>
    <div class="random-form-cost">
      <span class="random-form-cost__span">最低金額</span>
      <input type="number"name='min_cost'class="random-form-mincost__inp"min="0">
        <span class="random-form-cost-between">~</span>
        <span class="random-form-cost__span">最高金額</span>
      <input type="number"name='max_cost' class="random-form-maxcost__inp"min="0">
    </div>
  </form>
  @if(isset($error))
  <p class="error-message">{{$error}}</p>
  @endif
  <div class="random-detail">
    <div class="app-rule">
      <p class="app-rule-info">ボタンを押すと本日の献立がランダムで表示されます。</p>
      <p class="app-rule-head">鉄の掟</p>
      <ol class="app-rule__list">
        <li class="app-rule__item">お腹がすいたらボタンをクリックするべし</li>
        <li class="app-rule__item">表示された料理を作るべし</li>
        <li class="app-rule__item">料理表示後だだちに買出しに向かうべし</li>
        <li class="app-rule__item">料理が出来上がったら料理の写真を投稿するべし</li>
      </ol>
    </div>
    @if(isset( $meal ))
    <div class="random-meal-card">
      <img src="{{ asset($meal->image->path) }}" alt="meal-img" class="random-meal-card__img">
      <h2 class="random-meal-card__title">本日の献立</h2>
      <p class="random-meal-card__text">{{$meal->name}}</p>
      <a href="/meals/{{$meal->id}}" class="random-meal-card__text-a">詳しくみる</a>
    </div>
    @endif
  </div>
  <a class="btn-emergency" href="javascript:randomform.submit()" type="submit">
    <span class="btn-emergency-bottom"></span>
    <span class="btn-emergency-top"><span>押す</span></span>
  </a>
</div>

@endsection
