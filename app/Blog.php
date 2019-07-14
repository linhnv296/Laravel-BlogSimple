<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
