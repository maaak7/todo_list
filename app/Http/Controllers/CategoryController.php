<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $validator = CategoryService::validateFields($data);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->all(),
                'status'  => 'error',
            ]);
        }

        $data['user_id'] = Auth::id();
        $result = CategoryService::save($data);

        return response()->json([
            'message' => $result ? 'category was saved' : 'something goes wrong',
            'status' => $result ? 'success' : 'error',
        ]);
    }

    public function get(Request $request)
    {
        $categories = Category::where('user_id', Auth::id())->get();
        return response()->json($categories);
    }
}
