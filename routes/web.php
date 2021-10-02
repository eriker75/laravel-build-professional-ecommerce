<?php

use Illuminate\Support\Facades\Route;

/* 6 Types of Routes methods
    GET     Obtain data
    POST    Insert data in the database
    PUT     Update data in database
    DELETE  Delete data from database
    PATCH   Updata a single field in the database
    OPTIONS Updata a single field in the database
*/

Route::get('/', function () {
    return view('welcome');
});
