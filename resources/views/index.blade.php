@extends('layouts.parent')

@section('content')
  <div class="index-wrapper">
    <h1 class="index-wrapper__title">レシピ一覧</h1>
    <form action="/meals/search" method="get">
      <select name="category_id" id="">
        <option value="">すべてのカテゴリー</option>
        @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
      <select name="difficulty" id="">
        <option value="">すべての難易度</option>
        <option value="1">難しい</option>
        <option value="2">普通</option>
        <option value="3">簡単</option>
      </select>
      <span>最低金額</span>
      <input type="number"name='min_cost'class="">
        <span>~</span>
        <span>最高金額</span>
      <input type="number"name='max_cost'class="">
      <input class="search__keyword" type="text" placeholder="料理名検索 ..." value="" name="name">
      <input type="submit" class="" value="検索">
    </form>
    @foreach ($meals as $meal)
    <div class="meal-card">
      <img src="{{ asset($meal->image->path) }}" alt="meal-img" class="meal-card__img">
      <h2>{{$meal->name}}</h2>
      <div class="flex">
        <p>#{{$meal->category->name}}</p>
        <p>¥{{$meal->cost}}</p>
      </div>
      <a href="/meals/{{$meal->id}}" class="meal-card_a">詳しく見る</a>
    </div>
    @endforeach
  </div>


@endsection