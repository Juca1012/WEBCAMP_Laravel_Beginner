@extends('layout')

@section('contents')

<h1>ユーザ登録</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

<form method="POST" action="/user/register">
    @csrf

    名前：<input type="text" name="name"><br>
    email：<input type="text" name="email"><br>
    パスワード：<input type="password" name="password"><br>

    <button type="submit">登録する</button>
</form>

@endsection