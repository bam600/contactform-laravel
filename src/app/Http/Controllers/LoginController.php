<?php

namespace App\Http\Controllers;

use App\Models\User;
// フォームリクエストの読み込み
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
// findメソッドが呼ばれる
  public function find()
  {
  
  //resources/views/login.blade.php を探して表示
    return view('login');
  }

  public function login(Request $request)
{
    // バリデーション
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // 認証処理
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/dashboard'); // ログイン成功時の遷移先
    }

    return back()->withErrors([
        'email' => 'メールアドレスまたはパスワードが正しくありません。',
    ])->withInput();
}


}
