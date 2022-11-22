@extends('layouts.parent')

@section('content')
<div class="show-wrapper">
  <h1 class="show-wrapper__title title">料理詳細</h1>
  <div class="show-wrapper__button flex">
    <a href="/meals" onclick="history.back(-1);return false;"class="show-wrapper__button-back button">戻る</a>
    <a href="/meals/{{$meal->id}}/edit" class="show-wrapper__button-edit button">編集</a>
    <form action="/meals/{{$meal->id}}/delete" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" value="消去" class="show-wrapper__button-delete button">
    </form>
  </div>
  <div class="show-meal-card flex">
    <div class="show-img-container">
      <img src="{{ asset($meal->image->path) }}" alt="meal-card__img">
    </div>
    <div class="show-detail">
      <h2 class="show-detail__name">{{$meal->name}}</h2>
      <table class="show-detail__table">
        <tbody>
          <tr>
            <th>カテゴリー:</th>
            <td>{{$meal->category->name}}</td>
          </tr>
          <tr>
            <th>難易度:</th>
            <td>
              @if ($meal->difficulty == 1)
              難しい
              @elseif($meal->difficulty == 2)
              普通
              @elseif($meal->difficulty == 3)
              簡単
              @endif
            </td>
          </tr>
          <tr>
            <th>コスト:</th>
            <td>
              {{$meal->cost}}円
            </td>
          </tr>
          <tr>
            <th>材料メモ:</th>
            <td>{{$meal->ingredient}}</td>
          </tr>
          <tr>
            <th>作り方:</th>
            <td>{{$meal->way}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection