<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'marker' => 'uqbitz-example-laravel-v2',
        'driver' => DB::connection()->getDriverName(),
        'marks' => DB::table('release_marks')->orderBy('id')->get(),
    ]);
});
