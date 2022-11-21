@extends('layouts.parent')

@section('content')
<div class="top-wrapper">
  <a href="/meals/random">今日の献立を決める</a>
  <p>ボタンを押すと本日の献立がランダムで表示されます。</p>
  @if(isset( $meal ))
  <div class="random-meal-card">
    <img src="{{ asset($meal->image->path) }}" alt="meal-img">
    <h2>{{$meal->name}}</h2>
  </div>
  @endif
  <div>
    <p>鉄の掟</p>
    <ol>
      <li>表示された料理を作るべし</li>
      <li>料理表示後だだちに買出しに向かうべし</li>
      <li>料理が出来上がったら写真を投稿するべし</li>
    </ol>
  </div>
</div>
@endsection
