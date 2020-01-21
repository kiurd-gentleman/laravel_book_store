<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddToCart extends Model
{
    public function images(){
        return $this->hasMany(productImage::class);
    }
}
