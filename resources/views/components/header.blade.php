<header>
  <div class="header-logo">
    <img src="{{ asset('selcook icon.png') }}" alt="app-icon" class="header-icon">
    <h1 class="header-logo__ttl">ManCook</h1>
  </div>
  <nav class="header-log__nav">
    <ul class="header-log__list flex">
      <li class="header-log__item">
        <a href="/">トップ</a>
      </li>
      <li class="header-log__item">
        <a href="">投稿</a>
      </li>
      <li class="header-log__item">
        <a href="/meals">レシピ一覧</a>
      </li>
      <li class="header-log__item">
        <a href="/meals/create">レシピ作成</a>
      </li>
      <li class="header-log__item">
        <form method="post" action="/logout">
          @csrf
          <input class="btn-logout" type="submit" value="ログアウト">
        </form>
      </li>
    </ul>
  </nav>
</header>