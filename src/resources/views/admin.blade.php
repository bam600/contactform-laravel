<!-- 管理者登録画面 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact-form</title>
      <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ヘッダーの設定 -->
    <header class="header">
            <div class="header__inner">
                 <h1 class="header__logo">
                    FashionablyLate
                        <button>logout</button>
                </h1>
            </div>
    </header>
    <!-- コンテンツの設定 -->
    <main class ="contact-form__content">
            <div class ="contact-form__inner">
                <div class ="parent">
                    <h2 class="contact-form__logo">
                        Admin
                    </h2>
                </div>
            </div>
            
        <!-- 入力画面 -->
    <form action="{{ route('admin.index') }}" method="GET">
            <!-- メールアドレスか名前 -->
            <input type="text" name="name_mail" />

            <!-- 性別 -->
                <select name="gender" id="">
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
                <!-- 問い合わせの種類 -->
            <select name="category_id" id=>
                <option value="">選択してください</option>
                <option value="1">商品のお届けについて</option>
                <option value="2">商品の交換について</option>
                <option value="3">商品トラブル</option>
                <option value="4">ショップへのお問い合わせ</option>
                <option value="5">その他</option>
            </select>

            </div>
                <!-- 日付 -->
                <input type="date" name="contentdate" />
                <!-- 検索ボタン -->
                <button>検索</button>
                <!-- リセットボタン -->
                <button>リセット</button>
            </form>

            @foreach ($categories as $category)
           <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>

            if

           @endforeach

            <!-- 検索結果閲覧一覧 -->
             <table boder = 1>
                <tr>
                    <th>名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>問い合わせの種類</th>
                </tr>
        
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

             </table>
        </main>
    </body>
</html>