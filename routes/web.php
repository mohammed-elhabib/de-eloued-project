<?php

use App\Http\Controllers\MailFollowController;
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
    return view('index');
})->name('one');


/**
 *
 * الامانة الخاصة
 */
Route::prefix('sp')->group(function () {
    Route::get('mail-follow/list', [MailFollowController::class, "list"])->name('mail-follow-list');
    Route::get('mail-follow/add', [MailFollowController::class, "add"])->name('mail-follow-add');
    Route::post('mail-follow/store', [MailFollowController::class, "store"])->name('mail-follow-store');
    Route::get('mail-follow/view/{mail_follow_id}', [MailFollowController::class, "view"])->name('mail-follow-view');
    Route::get('mail-follow/change-status/{mail_follow_id}/{status}', [MailFollowController::class, "changeStatus"])->name('mail-follow-change-status');
    Route::get('mail-follow/edit/{mail_follow_id}', [MailFollowController::class, "edit"])->name('mail-follow-edit');
    Route::post('mail-follow/edit/store', [MailFollowController::class, "editStore"])->name('mail-follow-edit-store');
    Route::get('mail-follow/delete/{mail_follow_id}', [MailFollowController::class, "delete"])->name('mail-follow-delete');
});


Route::prefix('programe')->group(function () {
    Route::get('/', function () {
    return view("index");
    });
});
