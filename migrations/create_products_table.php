<?php 

include('../vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'hafiz',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
//use Illuminate\Events\Dispatcher;
//use Illuminate\Container\Container;
//$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

Capsule::schema()->create('products', function ($table) {
    $table->increments('id');
    $table->string('product_name')->unique();
    $table->string('product_code',500);
    $table->string('source');
    $table->timestamps();
    
});