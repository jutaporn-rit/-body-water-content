<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('index');
});


// Route::view('/wataerv2','index',['name' => 'home']);
