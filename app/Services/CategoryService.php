<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryService
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
            $category = new Category();
            $category->name = $data['name'];
            $category->user_id = Auth::id();
            return $category->save();
        } catch (\Exception $e) {
            return false;
        }
    }
}
