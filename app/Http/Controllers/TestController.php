<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestPostRequest;
use App\Http\Requests\TaskRegisterPostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Task as TaskModel;

class TestController extends Controller
{
    /**
     * トップページを表示する
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('test.index');
    }

    /**
     * 入力を受け取る
     * 
     * @return \Illuminate\View\View
     */
    public function input(TestPostRequest $request)
    {
        // validate済

        // データの取得
        $validatedData = $reqiest->validate();
        
        //var_dump($validatedData); exit;

        return view('test.index', ['datum' => $validatedData]);
    }
}
