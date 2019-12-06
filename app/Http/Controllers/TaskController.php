<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $validator = TaskService::validateFields($data);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
                'status'  => 'error',
            ]);
        }

        try {
//            DB::beginTransaction();
            TaskService::save($data);

            return response()->json([
                'message' => 'DONE',
                'status' => 'success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'status' => 'error',
            ]);
        }
    }
}
