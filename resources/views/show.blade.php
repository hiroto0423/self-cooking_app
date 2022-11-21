@extends('layouts.parent')

@section('content')
<div class="show-wrapper">
  <h1 class="show-wrapper__title">料理詳細</h1>
  <a href="/meals/{{$meal->id}}/edit" class="show-detail__a">編集</a>
  <form action="/meals/{{$meal->id}}/delete" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="消去">
  </form>
  <div class="show-img-container">
    <img src="{{ asset($meal->image->path) }}" alt="meal-card__img">
  </div>
  <div class="show-detail">
    <h2 class="show-detail__name">{{$meal->name}}</h2>
    <table>
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
          <th>作り方:</th>
          <td>{{$meal->way}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection