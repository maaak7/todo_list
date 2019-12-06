<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryService
{
    public static function validateFields($data)
    {
        $id = isset($data['id']) ? $data['id'] : 0;
        return Validator::make($data, [
            'name' => ['required', Rule::unique('categories')->ignore($id)],
        ]);
    }
}
