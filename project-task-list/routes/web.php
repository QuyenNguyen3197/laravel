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

class Task{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public string $long_description,
        public bool $completed,
        public string $created_at,
        public string $updated_at,
    )
    {}
}

$tasks=[
    new Task(1,'ABC','12345','1......5','false','2023-12-26','2023-12-26'),
    new Task(2,'DEF','98765','1......5','false','2023-12-26','2023-12-26')
];

Route::get('/', function () {
    return view('home',['name'=>'Hello']);
});

Route::get('/aboutus', function () use($tasks) {
    
    return view('aboutus',['task'=>$tasks]);
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/hallo', function () {
    return redirect()->route('hello');
});