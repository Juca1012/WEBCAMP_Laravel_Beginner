@extends('layout')

@section('contents')

<h1>完了タスクの一覧</h1>

<a href="/task/list">タスク一覧に戻る</a>

<table border="1">
    <tr>
        <th>タスク名</th>
        <th>期限</th>
        <th>重要度</th>
        <th>タスク終了日</th>
    </tr>

    @foreach ($completedTasks as $task)
    <tr>
        <td>{{ $task->name }}</td>
        <td>{{ $task->period }}</td>
        <td>{{ $task->getPriorityString() }}</td>
        <td>{{ $task->created_at }}</td>
    </tr>
    @endforeach
</table>

現在 {{ $completedTasks->currentPage() }} ページ目<br>
         {{-- {{ $list->links() }} --}}
         @if ($completedTasks->onFirstPage() === false)
         <a href="/completed_tasks/list">最初のページ</a> 
         @else
         最初のページ
         @endif
         /
         @if ($completedTasks->previousPageUrl() !== null)
            <a href="{{ $list->previousPageUrl() }}">前に戻る</a>
        @else
            前に戻る
        @endif
        /
        @if ($completedTasks->nextPageUrl() !==null)
            <a href="{{ $list->nextPageUrl() }}">次に進む</a>
        @else
            次に進む
        @endif
         <br>
         <hr>
         <menu label="リンク">
            <a href="/logout">ログアウト</a><br>
         </menu>

@endsection