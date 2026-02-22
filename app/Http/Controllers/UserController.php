<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRegisterPost;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // 登録画面表示
    public function index()
    {
        return view('user.register');
    }

    // 登録処理
    public function register(UserRegisterPost $request)
    {
        $datum = $request->validated();

        // パスワードをハッシュ化
        $datum['password'] = Hash::make($datum['password']);

        User::create($datum);

        return redirect('/')->with('message', 'ユーザ登録しました！！');
    }

}
