<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $fillable = ['category_name', 'is_active'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}