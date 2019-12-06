<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    // TODO винести в сервіс
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

        try {
            $category = new Category();
            $category->name = $data['name'];
            $category->user_id = Auth::id();
            $result = $category->save();

            return response()->json([
                'message' => $result ? 'Category was saved' : 'Oops',
                'status'  => $result ? 'success' : 'error',
                'data'  => ['category_id' => $category->id],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'status'  => 'error',
            ]);
        }

    }

    public function get(Request $request)
    {
        $categories = Category::where('user_id', Auth::id())->get();
        return response()->json($categories);
    }
}
