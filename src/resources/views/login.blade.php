<!-- ログイン画面 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact-form</title>
      <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">

</head>

<body>
    <!-- ヘッダーの設定 -->
    <header class="header">
            <div class="header__inner">
                 <h1 class="header__logo">
                    FashionablyLate
                </h1>
                    <a href="/register">Register</a>
            </div>
    </header>
    <!-- コンテンツの設定 -->
    <main class ="contact-form__content">
            <div class ="contact-form__inner">
                <div class ="parent">
                    <h2 class="contact-form__logo">
                        login
                    </h2>
                </div>
            </div>
            
        <!-- 入力画面 -->
        <form action="/login" method="post">
            @csrf
            <div class="boxsizing content-box">


            <!-- 登録済アドレス入力欄 -->
            <div class="form-item">
                <p class="form-item-label">
                    <span class="form-item-label-required"> </span>メールアドレス
                </p>
                <!-- 登録済アドレス入力 -->
                <input type="email" name="email" class="form-item-input" placeholder="例）test@example.com" value="{{ old('email') }}" />
            </div>

            <!-- エラー -->
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>

            <!--登録済パスワード入力欄  -->
            <div class="form-item">
                <p class="form-item-label">
                    <span class="form-item-label-required"></span>パスワード
                </p>
                <!-- 登録済みパスワード入力 -->
                <input type="password" name="password" class="form-item-input" placeholder="coachtech1106" value="{{ old('password') }}" />
            </div>

            <!-- エラー -->
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>

            <!-- ログインボタン -->
            <br><input type="submit" class="form-btn" value="ログイン" /></br>
            
        </div>
</form>
    </main>
</body>
</html>