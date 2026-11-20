<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\MinController;
use App\Http\Controllers\MaxController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\ThirdController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\OddEvenController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MobileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', function () {
    return "Welcome to Laravel Controller";
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/a', function () {
    return view('test');
});
Route::get('/login', function () {
    return view('login');
});
Route::match(['get', 'post'], '/calculate',
    [CalculatorController::class, 'calculate']);

Route::get('/result',
    [CalculatorController::class, 'result']);

Route::match(['get','post'], '/minimum',[MinController::class, 'findMinimum']);

Route::match(['get','post'], '/maximum',[MaxController::class, 'findMaximum']);

Route::get('/first', [FirstController::class, 'index']);

Route::get('/second', [SecondController::class, 'index']);

Route::get('/third', [ThirdController::class, 'index']);

Route::get('/calculator', [CalculatorController::class, 'index']);

Route::post('/calculate', [CalculatorController::class, 'calculate']);

Route::get('/voting', [VoteController::class, 'index']);

Route::post('/vote', [VoteController::class, 'submitVote']);

Route::get('/sum', [SumController::class, 'index']);

Route::post('/sum', [SumController::class, 'calculateSum']);

Route::get('/oddeven', [OddEvenController::class, 'index']);

Route::post('/oddeven', [OddEvenController::class, 'check']);

Route::get('/result', [ResultController::class, 'index'])
    ->name('result');

Route::get('/company', [CompanyController::class, 'index'])
    ->name('company');

    Route::get('/salary', [SalaryController::class, 'index']);

Route::post('/salary', [SalaryController::class, 'calculateSalary']);

Route::get('/product', [ProductController::class, 'index']);

Route::post('/product', [ProductController::class, 'calculate']);

Route::get('/mobiles', [MobileController::class, 'index'])->name('mobiles');
