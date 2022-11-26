# ManCook 男の自炊アプリ（2022年11月作成)



## サービス概要

###  自炊が継続して続かないめんどくさがりの男性が継続して自炊を行えるようにするアプリ

## 作った理由として
***僕自身一人暮らしで自炊が行えず良くない食生活を送っていたから***　　
- 自炊はしたい気持ちはあったが継続して続きませんでした。

> なぜ自炊が続かないのか？？
- レシピを見ても作り方が分からなくて挫折
- 毎日何作るか決めるのが面倒

よって・・・　　　

***<span style="color:red;">自分が作ることができる料理の中から毎日ランダムで料理を選択することが出来れば継続して自炊が続くのでは！？</span>***

## アプリの使い方

### レシピ登録ページ
- レシピの作成
![mancook　レシピ登録ページ](https://user-images.githubusercontent.com/98827504/204075969-5b84a713-5706-4965-853d-7c0fd0348744.png)
### トップページ
- ボタンを押す
![mancookトップページボタン押す前](https://user-images.githubusercontent.com/98827504/204075972-fbebf8c2-fa85-415e-84d9-579a96f830fc.png)
- 作成したレシピの中からランダムに本日の献立が表示されます
![mancookトップページボタン押した後](https://user-images.githubusercontent.com/98827504/204075975-8c9ab65b-b47f-4091-9b61-2407a71fb776.png)
### その他のページ
#### レシピ一覧ページ 
![mancook 一覧ページ](https://user-images.githubusercontent.com/98827504/204075983-5f7a0d29-133c-4538-90be-6ff38d1bbab2.png)
#### レシピ詳細ページ
![mancook 詳細ページ](https://user-images.githubusercontent.com/98827504/204075967-e260d1f4-d7cc-4cd5-bc42-2f304e07e597.png)
#### 料理登録時のバリデーション
![mancook validation 画面](https://user-images.githubusercontent.com/98827504/204075970-2167665c-ddc9-453b-9edc-01b750ccd87d.png)
## ER図
![mancook ER](https://user-images.githubusercontent.com/98827504/204077085-0af0e889-00a8-4906-bbe5-31003b0c2d8a.png)

## 機能一覧
- ユーザー認証機能
- ユーザーログイン機能
- ユーザーログアウト機能
- レシピ登録機能
- レシピ一覧・詳細表示機能
- レシピ変更機能
- レシピ消去機能
- レシピランダム表示機能
- レシピ登録バックエンドバリデーション
- レシピ登録フロントエンドリアルタイムバリデーション

## 使用技術
Laravel Framework 8.83.26
## 今後実装する機能
- 料理投稿機能
- 他ユーザーの料理いいね機能
- 自炊時刻カレンダー管理機能
