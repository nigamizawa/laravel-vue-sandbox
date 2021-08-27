<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Faker\Core\Number;

class TaskController extends Controller
{
    //
    public function index()
    {
        return Task::all();
    }

    public function show(Task $task): Task
    {
        return $task;
    }

    public function new(Request $request)
    {
        return Task::create($request->all());
    }
}
