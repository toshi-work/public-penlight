<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() 
    {
        $tasks = Task::select('*')->with('users')->get();
        
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function create() 
    {
        return view('tasks.create');
    }

    public function store(Request $request, Task $task) 
    {
        // Taskモデルをインスタンス化
        $task = $task;

        // データを配列化
        $data = $request->all();

        // データを保存
        $task->fill($data);
        $task->save();

        return redirect(route('tasks.index'))->with('info_message', 'タスクを登録しました');
    }
}
