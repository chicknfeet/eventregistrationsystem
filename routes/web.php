<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\LandingController;
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

Route::get('/',[LandingController::class,'index'])->name('landing');

Route::get('/event',[EventController::class,'index'])->name('event');
Route::post('/save-events',[EventController::class, 'save_events'])->name('saveEvents');
Route::get('/delete-events/{id}', [EventController::class, 'delete_events'])->name('removeEvents');
Route::get('/update-events/{id}', [EventController::class, 'update_events'])->name('updateEvents');
Route::put('/save-updated-events/{id}', [EventController::class, 'save_updated_events'])->name('saveUpdatedEvents');

Route::get('/attendee',[AttendeeController::class,'index'])->name('attendee');
Route::post('/save-attendees',[AttendeeController::class, 'save_attendees'])->name('saveAttendees');
Route::get('/delete-attendees/{id}', [AttendeeController::class, 'delete_attendees'])->name('removeAttendees');
Route::get('/update-attendees/{id}', [AttendeeController::class, 'update_attendees'])->name('updateAttendees');
Route::put('/save-updated-attendees/{id}', [AttendeeController::class, 'save_updated_attendees'])->name('saveUpdatedAttendees');