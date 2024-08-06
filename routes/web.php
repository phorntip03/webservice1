<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //คำสั่งในการ debug ข้อมูล
    //dd(55555);
    //การ query ข้อมูล
    //ดึงข้อมูลตารางทั้งหมดและเก็บค่าในตัวแปล model
    $model = \App\Models\Province::all();
    dd($model[0]->student[0]->name);

    return view('welcome');
});
