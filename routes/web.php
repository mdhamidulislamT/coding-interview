<?php

use App\Http\Controllers\DemoController;
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


Route::get('/', [DemoController::class, 'admins'])->name('admins');
Route::get('/customers', [DemoController::class, 'customers'])->name('customers');
Route::get('/employees', [DemoController::class, 'employees'])->name('employees');
Route::get('/message-categories', [DemoController::class, 'messageCategories'])->name('message-categories');
Route::get('/messages', [DemoController::class, 'messages'])->name('messages');



Route::post('/assign', [DemoController::class, 'assign'])->name('assign');
Route::get('/my-messages/{id?}', [DemoController::class, 'myMessages'])->name('my-messages');
Route::post('/message/{id}', [DemoController::class, 'messageUpdate'])->name('message.update');
