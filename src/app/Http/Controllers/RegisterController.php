<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\View;


class RegisterController extends Controller
{
    // 登録フォームの表示（GET）＋ユーザー一覧
    public function register()
    {
        $users = User::all();
        return view('register', ['users' => $users]);
    }

    // 登録処理（POST）
    public function create(RegisterRequest $request)
    {
        $form = $request->only(['name', 'email', 'password']);
        $form['password'] = Hash::make($form['password']);

        $user = User::create($form);

        auth()->login($user);

        return redirect('/register')->with('success', '登録が完了しました。');
    }

    // バリデーションエラー表示（未使用なら削除してもOK）
    public function errorCheck(RegisterRequest $request)
    {
        $form = $request->only(['name', 'email', 'password']);
        // User::errorCheck($form);
        // return redirect('/register');
    }
}
