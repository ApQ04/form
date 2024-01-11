<?php
use Illuminate\Http\Request;
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

Route::get('/my-controller', [MyController::class,'index']);
Route::get('/my-controller2', ['App\Http\Controllers\MyController@index']);
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/my-controller3', 'MyController@index');
});
Route::resource('/my-controller4', UserController::class);
*/
Route::get('/', function () {
    return view('Textbox');
})->name('Textbox');

Route::get('pageInput', function (\Illuminate\Http\Request $request) {
    $inputNumber = $request->input('number');
    return view('pageInput', ['inputNumber' => $inputNumber]);
})->name('pageInput');

Route::get('default', function () {
    return view('default');
})->name('default');

Route::get('Tester', function () {
    return view('Tester');
})->name('Tester');