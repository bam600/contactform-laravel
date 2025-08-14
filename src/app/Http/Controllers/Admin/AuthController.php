<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
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
            // 認証成功 → 管理画面へ
            return redirect()->route('admin.dashboard');
        }

        // 認証失敗 → エラー表示
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->withInput();
    }
}

