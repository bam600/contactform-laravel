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
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="boxsizing content-box">

        <div class="form-item">
            <p class="form-item-label">メールアドレス</p>
            <input type="email" name="email" required>
            @error('email')
                <div class="form__error">{{ $message }}</div>
            @enderror
        </div>

        <div 
        class="form-item">
            <p class="form-item-label">パスワード</p>
            <input type="password" name="password" required>
            @error('password')
                <div class="form__error">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" class="form-btn" value="ログイン" />
    </div>
</form>
    </main>
</body>
</html>