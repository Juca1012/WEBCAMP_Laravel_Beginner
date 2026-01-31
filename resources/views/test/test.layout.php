@extends('layout')

{{-- メインコンテンツ --}}
@section('contents')
        <form action="/test/input" method="post">
            email：<input type="text" name="email"><br>
            パスワード：<input type="password" name="password"><br>
            <button>送信する</button>
        </form>
@endsection