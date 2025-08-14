<!-- 入力内容確認画面 -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/login" method="post">
      @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value="{{ $contact['last_name'] }}{{ $contact['first_name'] }}" readonly />
                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}" />
                <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" />
              </td>
            </tr>

            @php
              $genderLabel = match($contact['gender']) {
              '1' => '男性',
              '2' => '女性',
              '3' => 'その他',
              };
            @endphp

            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
              {{ $genderLabel }}
              <input type="hidden" name="gender" value="{{ $contact['gender'] }}" />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                 {{ $contact['email'] }}
                <input type="hidden" name="email" value="{{ $contact['email'] }}">
              </td>
            </tr>
            <tr class="confirm-table__row">
            <th class="confirm-table__header">電話番号</th>
            <td class="confirm-table__text">
              {{ $contact['first_tel'] }}{{ $contact['middle_tel'] }}{{ $contact['last_tel'] }}
              <input type="hidden" name="tel" value="{{ $contact['first_tel'] }}{{ $contact['middle_tel'] }}{{ $contact['last_tel'] }}" />
            </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                {{ $contact['address'] }}
               <input type="hidden" name="address" value="{{ $contact['address'] }}">
              </td>
              </td>
            </tr>
              <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                {{ $contact['building'] }}
                <input type="hidden" name="building" value="{{ $contact['building'] }}">
              </td>
            </tr>
            
            @php
              $category = \App\Models\Category::find($contact['category_id']);
            @endphp

            <tr>
              <th>お問い合わせの種類</th>
                <td>
                {{ $category->content }}
                <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                </td>
              </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                 {{ $contact['detail'] }}
                  <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
