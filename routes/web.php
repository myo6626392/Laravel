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

Route::get('/todos',[TodoController::class,'index'])->name('todos.index');
Route::get('todos/create',[TodoController::class,'create'])->name('todos.create');
Route::post('/todos',[TodoController::class,'store'])->name('todos.store');
Route::get('todos/{todo}',[TodoController::class,'show'])->name('todos.show');
Route::get('todos/{todo}/edit',[TodoController::class,'edit'])->name('todos.edit');
Route::put('todos/{todo}',[TodoController::class,'update'])->name('todos.update');
Route::delete('todos/{todo}',[TodoController::class,'destroy'])->name('todos.destroy');
