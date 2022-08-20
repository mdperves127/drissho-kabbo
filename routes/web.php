<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// FrontendController Start

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/application', [App\Http\Controllers\FrontendController::class, 'application'])->name('application');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');



Route::post('/application/form/post', [App\Http\Controllers\FrontendController::class, 'applicationform'])->name('application.form.post');
Route::post('/contact/form/post', [App\Http\Controllers\FrontendController::class, 'contactform'])->name('contact.form.post');




// FrontendController Ends
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard/applications', [App\Http\Controllers\HomeController::class, 'application'])->name('home.applications');
Route::get('/dashboard/application/view/{id}', [App\Http\Controllers\HomeController::class, 'applicationview'])->name('home.application.view');
Route::post('/dashboard/application/{id}', [App\Http\Controllers\HomeController::class, 'applicationdelete'])->name('home.application.delete');
Route::get('/dashboard/contacts', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contacts');
Route::get('/dashboard/contact/view/{id}', [App\Http\Controllers\HomeController::class, 'contactview'])->name('home.contact.view');
Route::post('/dashboard/contact/{id}', [App\Http\Controllers\HomeController::class, 'contactdelete'])->name('home.contact.delete');
