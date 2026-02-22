<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompletedTask;

class CompletedTaskController extends Controller
{
    public function list()
    {
       $completedTasks = CompletedTask::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('task.completed_list', compact('completedTasks'));
    }
}
