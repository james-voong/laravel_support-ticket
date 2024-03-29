<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllIssuesController;
use App\Http\Controllers\TicketController;

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

Route::get('/', [TicketController::class, 'index'])->name('ticket');
Route::post('/ticket', [TicketController::class, 'store']);

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/all_issues', function () {
    return view('all_issues');
})->name('all_issues');