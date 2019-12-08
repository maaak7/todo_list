<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $validator = TaskService::validateFields($data);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
                'status' => 'error',
            ]);
        }

        $data['user_id'] = Auth::id();
        $result = TaskService::save($data);

        return response()->json([
            'message' => $result ? 'task was created' : 'something goes wrong',
            'status' => $result ? 'success' : 'error',
        ]);
    }

    public function get(Request $request)
    {
        $tasks = Task::where('user_id', 4)
            ->with('categories')
            ->get();

        return response()->json($tasks);
    }

    public function changeStatus(Request $request)
    {
        $task_id = $request->task_id;

        if (!$task_id) {
            return response()->json([
                'message' => 'task ID required',
                'status' => 'error',
            ]);
        }

        $result = TaskService::changeStatus($task_id);

        return response()->json([
            'message' => $result ? 'status changed' : 'something goes wrong',
            'status' => $result ? 'success' : 'error',
        ]);
    }
}
