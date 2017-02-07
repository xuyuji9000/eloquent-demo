<?php

use Illuminate\Database\Capsule\Manager as Capsule;

//Capsule::schema()->create('orders', function($table){
//    $table->increments('id');
//    $table->string('title');
//});

// dd(Order::first());

// Order::create(['title'=> 'Mary Ann']);

// dd(Order::first()->toArray());

$order = Order::first();
$order->title = "Playstation 4";
$order->save();
dd(Order::first()->toArray());
