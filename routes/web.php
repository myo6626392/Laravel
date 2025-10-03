<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    $users = ['mgmg','aung aung','hla hla'];
    $bobo =[
        'name'=>'bobo',
        'address'=>'ygn',
        'email'=>'bobo@gmail.com'
        ];
    $nameLists =[
        ['name'=>'mgmg','age'=>22],
        ['name'=>'ayeaye','age'=>32],
        ['name'=>'aungaung','age'=>12],
        ];
       // return $nameLists;
//return $bobo;

    return view('home',[
        'users' => $users,
        'bobo'=>$bobo,
        'lists'=>$nameLists,

        ]);
})->name('home');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');
Route::get('/about',function(){
    return view('about');
})->name('about');
Route::get('/todos',[TodoController::class,'index'])->name('todos.index');
//Route::get('/', function () {
    //return "Welcome ";
    //return view('welcome');
//});

//Route::get('/home', function () {
    //$arr = ["apple","orange","mangon"];
    //return $arr;
    //return view('home');
//});
//Route::get('/contact', function () {
    //return true;
    //return view('contact');
//});
