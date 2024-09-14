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



Route::get('/form', function(){
    return view('form');
})->name('form');

Route::post('/submit-form/{id}',function($id){
    // echo 'hi ' . $id . "<br>";

    // echo request()->get('myinput');
 
})->name('form.submit');


Route::fallback(function(){
    
    return redirect()->route('info', [1,2]);
});