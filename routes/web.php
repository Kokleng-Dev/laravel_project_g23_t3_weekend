<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo '<a href="'. route('info',[123,'hello world']) .'">User</a>';
})->name('home');


Route::get('information/{data}/detail/{id}', function($data,$id){
    echo "info : " . $data;
    echo "<br>";
    echo "id : " . $id;

    echo "<br>";
    echo "<a href='". route('home') ."'>Home</a>";
})->name('info');