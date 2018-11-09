<?php 

include('../connection.php');

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;


Capsule::schema()->create('categories', function ($table) {
    $table->increments('id');
    $table->string('category_name')->unique();
    $table->boolean('is_active')->default(1);
    $table->timestamps();
    
});