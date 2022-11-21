@extends('layouts.parent')

@section('content')
  <div class="index-container">
    <h1>レシピ一覧</h1>
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