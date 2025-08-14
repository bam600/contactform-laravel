<!-- フォーム入力画面　教材のindex -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo" href="/">
        FashionablyLate
      </h1>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <!-- 入力画面を呼び出す -->
      <form class="form"  action="/confirm" method="post">
        @csrf
        <div class="form__group">
          
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>

          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="テスト" />
              <input type="text" name="first_name" placeholder="太郎" />
            </div>
            <div class="form__error">
              @error('last_name')
                {{ $message }} 
              @enderror
              @error('first_name')
                {{ $message }} 
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group-title">
          <span class="form__label--item">性別</span>
          <span class="form__label--required">※</span>
          </div>

        <div class="form__group-content">
        <div>
          <label>
            <input type="radio" name="gender" value="1"
              {{ old('gender') === '1' ? 'checked' : '' }}>
            男性
          </label>
        </div>

<div>
    <label>
        <input type="radio" name="gender" value="2"
            {{ old('gender') === '2' ? 'checked' : '' }}>
        女性
    </label>
</div>

<div>
    <label>
        <input type="radio" name="gender" value="3"
            {{ old('gender') === '3' ? 'checked' : '' }}>
        その他
    </label>
</div>

          <div class="form__error">
              @error('gender')
                {{ $message }} 
              @enderror
            </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              @error('email')
                {{ $message }} 
              @enderror
            </div>
          </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="first_tel" placeholder="090" />
              <label>-</label>
              <input type="tel" name="middle_tel" placeholder="1111" />
              <label>-</label>
              <input type="tel" name="last_tel" placeholder="1111" />
            </div>
            <div class="form__error">
              @error('first_tel')
                {{ $message }} 
              @enderror
              @error('middle_tel')
                {{ $message }} 
              @enderror
              @error('last_tel')
                {{ $message }} 
              @enderror
            </div>
          </div>
        </div>

         <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              @error('address')
                {{ $message }} 
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="スカイレジデンス212" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
            <select name="category_id">
                <option value="">選択してください</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                  {{ $category->content }}
                </option>
                @endforeach
              </select>
            <div class="form__error">
              @error('category_id')
                {{ $message }} 
              @enderror
            </div>
          </div>
  


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
                       <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="資料をいただきたいです"></textarea>
            </div>
            <div class="form__error">
                @error('detail')
                {{ $message }} 
              @enderror
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
