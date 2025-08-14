<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ログイン画面の表示
    public function find()
    {
        return view('login'); // resources/views/login.blade.php を表示
    }

    // ログイン処理
    public function login(Request $request)
    {
        // バリデーション
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 認証情報の取得
        $credentials = $request->only('email', 'password');

        // 認証試行
        if (Auth::attempt($credentials)) {
            // セッション固定攻撃対策
            $request->session()->regenerate();

            // ログイン成功時の遷移先（admin画面へ）
            return redirect()->intended('/admin');
        }

        // 認証失敗時の処理
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->withInput();
    }
}
