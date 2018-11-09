<?php 

include('../connection.php');

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;



Capsule::schema()->table('products', function ($table) {
    $table->integer('category_id');
});