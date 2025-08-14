<!-- 新規登録画面 -->
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
                        <a href="{{ route('login') }}" class="login-button">login</a>
                </h1>
            </div>
    </header>
    <!-- コンテンツの設定 -->
    <main class ="contact-form__content">
            <div class ="contact-form__inner">
                <div class ="parent">
                    <h2 class="contact-form__logo">
                        Register
                    </h2>
                </div>
            </div>

        @if (session('success'))
            <div class="todo__alert--success">
                {{ session('success') }}
            </div>
        @endif

            
        <!-- 入力画面 -->
        <form action="/register" method="post">
            @csrf
            <div class="boxsizing content-box">
            <!-- 名前入力欄-->
            <div class="form-item">
                <p class="form-item-label">
                    <span class="form-item-label-required"> </span>お名前
                </p>
                <!-- 名前初期入力 -->
                <input type="text" name="name" class="form-item-input" placeholder="例）山田&nbsp太郎" value="{{ old('name') }}" />
            </div>
                <div class="form__error">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>


            <!-- アドレス入力欄 -->
            <div class="form-item">
                <p class="form-item-label">
                    <span class="form-item-label-required"> </span>メールアドレス
                </p>
                <!-- アドレス初期入力 -->
                <input type="email" name="email" class="form-item-input" placeholder="例）test@example.com" value="{{ old('email') }}" />
            </div>
                <div class="form__error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>

            <!--パスワード入力欄  -->
            <div class="form-item">
                <p class="form-item-label">
                    <span class="form-item-label-required"></span>パスワード
                </p>
                <!-- 初期入力 -->
                <input type="password" name="password" class="form-item-input" placeholder="coachtech1106" value="{{ old('password') }}" />
            </div>

            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>

            <!-- 登録ボタン -->
            <input type="submit" class="form-btn" value="登録" />
        </div>
</form>
    </main>
</body>
</html>