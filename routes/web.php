<?php

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

Route::get('/', function () {
    return view('welcome');

	// $productLine = DB::table('productlines')->pluck('productLine');
	// dd($productLine);
})->name('home');

Route::prefix('duongbo')->group(function () {
	Route::middleware(['awesome'])->group(function () {
		Route::get('phamhung/{age}-{cer}/xemay', function ($age, $cer) {
			return 'Tôi đang di chuyển trên đường Phạm Hùng bằng xe máy';
		});

		Route::get('phamhung/{age}-{cer}/xemay/{type?}', function ($age, $cer, $type = null) {
			return 'Tôi đang di chuyển trên đường Phạm Hùng bằng xe máy: ' . $type;
		});

		Route::get('duongdinhnghe/{age}-{cer}/xemay', function ($age, $cer) {
			return 'Tôi đang di chuyển trên đường Dương Đình Nghệ bằng xe máy';
		});
	});

	Route::get('phamhung', function () {
		return 'Tôi đang di chuyển trên đường Phạm Hùng';
	});

	Route::get('duongdinhnghe', function () {
		return 'Tôi đang di chuyển trên đường Dương Đình Nghệ';
	});
});

Route::get('songhong', function () {
	return 'Tôi đang di chuyển trên Sông Hồng';
});



Route::prefix('animal')->group(function () {
	Route::get('eat/{food}', 'AnimalController@eat');
	Route::get('run/{earth}-{a}-{b}-{c}-{d}', 'AnimalController@run');
	Route::post('run/{earth}-{a}-{b}-{c}-{d}', 'AnimalController@run');
});

//Route::resource('cars', 'CarController')->only(['create', 'show', 'update']);
Route::resource('cars', 'CarController');




