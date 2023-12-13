<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;
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


route::get('/form' , [formcontroller::class ,'form']);
route::post('/form' , [formcontroller::class , 'data']);
route::get('/std/view', [formcontroller::class , 'std_view']);
route::get('/std/dlt/{id}', [formcontroller::class , 'std_dlt'])->name('dlt');
route::get('/std/edit/{id}', [formcontroller::class , 'std_edit'])->name('edit');
route::post('/std/update/{id}', [formcontroller::class , 'std_update']);