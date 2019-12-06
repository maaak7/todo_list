<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TaskService
{
    public static function validateFields($data)
    {
//        $id = isset($data['id']) ? $data['id'] : 0;
        return Validator::make($data, [
            'name' => 'required',
        ]);
    }

    public static function save($data)
    {
        $task = new Task();
        $task->name = $data['name'];
        $task->user_id = Auth::id();
        $task->done = false;
        $task->save();
        $task->categories()->attach($data['categories']);
        return $task->save();
    }
}
