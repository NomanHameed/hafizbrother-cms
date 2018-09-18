<?php

namespace Models;

class Product extends \Illuminate\Database\Eloquent\Model {

    protected $fillable = ['product_name', 'product_code', 'source'];
    public $timestamps = false;
}