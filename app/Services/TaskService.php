<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskService
{
    public static function validateFields($data)
    {
        return Validator::make($data, [
            'name' => 'required',
        ]);
    }

    public static function save($data)
    {
        try {
            $task = new Task();
            $task->name = $data['name'];
            $task->user_id = $data['user_id'];
            $task->done = false;
            $task->save();
            $task->categories()->attach($data['categories']);
            return $task->save();
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function changeStatus($task_id)
    {
        try {
            $task = Task::where('id', $task_id)->first();
            $task->done = !$task->done;
            return $task->save();
        } catch (\Exception $e) {
            return false;
        }
    }
}
