<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = ['product_name', 'product_code', 'source', 'category_id'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}