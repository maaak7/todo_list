<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'task_category');
    }
}
