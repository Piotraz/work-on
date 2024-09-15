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
    return view('home');
})->name('home');

Route::get('/kontakt', function () {
    return view('contact');
})->name('contact');

Route::get('/it', function () {
    return view('it');
})->name('project.it');

Route::get('/fizjo', function () {
    return view('fizjo');
})->name('project.fizjo');

Route::get('/faq', function () {
    return view('faq');
})->name('project.faq');

Route::get('/rekrutacja', function () {
    return view('rekrutacja');
})->name('rekrutacja');

Route::get('/kurs-administrator-sieci-cisco-ccna', function () {
    return view('courses.cisco');
})->name('course.cisco');

Route::get('/kurs-frontend-developer', function () {
    return view('courses.frontend');
})->name('course.frontend');

Route::get('/kurs-marketing-internetowy', function () {
    return view('courses.marketing');
})->name('course.marketing');

Route::get('/kurs-business-english', function () {
    return view('courses.english');
})->name('course.english');

Route::get('/kurs-masaz-tkanek-glebokich', function () {
    return view('courses.mtg');
})->name('course.mtg');

Route::get('/kurs-iastm-kurs-terapii-narzedziowej', function () {
    return view('courses.iastm');
})->name('course.iastm');

Route::get('/kurs-rocktape-kurs-tapingu', function () {
    return view('courses.rocktape');
})->name('course.rocktape');
