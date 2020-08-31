<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'stock',
    ];

    /**
     * Relations
     */
     public function category() {
         return $this->belongsTo(Category::class)->withTrashed();
     }
}
