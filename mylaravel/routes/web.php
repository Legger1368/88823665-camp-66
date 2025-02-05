<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\endUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;


Route::get('/login',[LoginController::class,'index']);

Route::get('/home',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);

Route::get('/force-error', function () {
    abort(500);
});
Route::post('/register',[RegisterController::class,'create']);

Route::get('/users',[endUserController::class,'index']);
Route::get('/user/{id}',[endUserController::class,'edit']);
Route::put('/user/{id}',[endUserController::class,'edit_action']);
Route::delete('/user',[endUserController::class,'delete']);


/*

//practice

Route::get('/hometest',function(){
    return view('hometest');
});
Route::get('blog',[AdminController::class,'index']);
Route::get('about',[AdminController::class,'about']);


Route::get('/about',function(){
    return view('about');
});

Route::get('/blog',function(){

    return view('blog');
});
Route::get('/blog/{name}',function($name){
    return "<h1>บทความ ${name}</h1>";
});


Route::get('/admin/user/jirayu',function(){
    return "<h1>ยินดีต้อนรับAdmin</h1>";
})->name('login');
*/




/*
Route::get('/mycontroller',
    [MyController::class, 'myFunction']);

Route::post('/mycontroller',
    [MyController::class, 'showTable']);

Route::get('/mycontroller/{id?}',
    [MyController::class, 'myFunction']);

Route::post('/mycontroller/{id?}',
    [MyController::class, 'myFunction']);

Route ::get('/hello/{id?}', function ($val="") {
        return "<h1>Hello World!</h1>";
    });

Route::get('/', function () {
    return view('home');
});




*/



































































































/*

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
Route::get('/calculate', function() {
    return 'GET request to /calculate';
});

Route::get('/mycontroller/{id?}', [MyController::class, 'myFunction']);

Route::get('/', function () {
    return view("home");
});
Route::get('/login',
     [LoginController::class,'index']);
Route::get('/register',
     [RegisterController::class,'index']);
Route::get('/home',
     [homeController::class,'index']);
Route::get('/',
     [LoginController::class,'index']);
Route::get('/login',
     [homeController::class,'index']);
Route::get('/login',
     [LoginController::class,'index']);

*/



























































/*

Route::get('/', function () {
    return view("welcome");
});
Route::get('/hello',function () {

    return "<h1>ยินดีต้อนรับสู่หน้าแรก</h1><br>
            <a href='admin/user/legger'>หน้าต่อไป</a> ";
});

Route::get('/hello',function () {

    return "<h1>ยินดีต้อนรับสู่หน้าแรก</h1><br>
            <a href='".route('admin')."'>หน้าต่อไป</a> ";
});

Route::get('/admin/user/legger', function () {
    return "<h1>ยินดีต้อนรับADMIN</h1>";
})->name('admin');

Route::fallback(function(){
    return "<h1>ไม่พบหน้าเว็บนี้</h1>";
});

Route::get('/blog',function(){
    return view('blog');

});

// web.php
Route::post('/myview', function () {
    // การรับค่าจากฟอร์มและการคำนวณ
    $num = request('number'); // ใช้ request() ในการดึงค่าจากฟอร์ม
    return view('myview', compact('num')); // ส่งค่าที่ได้รับไปยัง view
});


Route::get('/myview',function(){
    return view('myview');

});
*/








?>
