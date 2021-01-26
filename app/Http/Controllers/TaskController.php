<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('task.index');
    }

    public function InsertStore(CreateTaskRequest $request)
    {
        $request->createTask();
        return redirect()->route('task.index');
    }

    public function destroyStore(Task $Task)
    {
        $Task->delete();
        return redirect()->route('task.index');
    }

    public function updateStatus(Task $Task)
    {
        $Task->status = 0;
        $Task->update();

        return redirect()->route('task.index');
    }

    public function update(Task $Task)
    {
        return view('task.edit', compact('Task'));
    }

    public function updateStore(UpdateTaskRequest $request, Task $Task)
    {
       $request->updateTask($Task);

       return view('task.index');
    }
    
}
