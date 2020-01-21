<?php

namespace App\Models;

use App\Http\Controllers\backend\CategoryController;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
