@extends('layouts.parent')

@section('content')
  <div class="index-wrapper">
    <h1 class="index-wrapper__title title">レシピ一覧</h1>
    <form action="/meals/search" method="get" class="search-form flex">
      <div class="search-form-category">
        <select name="category_id" class="search-form-category pulldown">
          <option value="" class="search-form-category__item">すべてのカテゴリー</option>
          @foreach ($categories as $category)
            <option value="{{$category->id}}" class="search-form-category__item">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="search-form-difficulty">
        <select name="difficulty" class="search-form-difficulty pulldown">
          <option value=""class="search-form-difficulty__item">すべての難易度</option>
          <option value="1"class="search-form-difficulty__item">難しい</option>
          <option value="2"class="search-form-difficulty__item">普通</option>
          <option value="3"class="search-form-difficulty__item">簡単</option>
        </select>
      </div>
      <div class="search-form-cost">
        <span class="search-form-mincost__text">最低金額</span>
        <input type="number"name='min_cost'class="search-form-mincost__inp"min="0">円
          <span class="search-form-between">~</span>
          <span class="search-form-maxcost__text">最高金額</span>
        <input type="number"name='max_cost'class="search-form-maxcost__int"min="0">円
      </div>
      <input class="search-form-name__inp" type="text" placeholder="料理名検索 ..." value="" name="name">
      <input type="submit" class="search-form-submit__button" value="検索">
    </form>
    <div class="pagination-detail flex">
      @if (count($meals) >0)
        <p>全{{ $meals->total() }}件中 
        {{  ($meals->currentPage() -1) * $meals->perPage() + 1}} ~ 
        {{ (($meals->currentPage() -1) * $meals->perPage() + 1) + (count($meals ) -1)  }}件</p>
      @else
        <p>データがありません。</p>
      @endif
        {{ $meals->links() }}
    </div>
    <div class="meal-cards flex">
      @foreach ($meals as $meal)
      <div class="meal-card">
        <img src="{{ asset($meal->image->path) }}" alt="meal-img" class="meal-card__img">
        <h2 class="meal-card-name__text">{{$meal->name}}</h2>
        <div class="flex meal-card-text">
          <p class="meal-card-category__text">#{{$meal->category->name}}</p>
          <p class="meal-card-cost__text">¥{{$meal->cost}}</p>
        </div>
        <a href="/meals/{{$meal->id}}" class="meal-card-detail__link">詳しく見る</a>
      </div>
      @endforeach
    </div>
  </div>
@endsection