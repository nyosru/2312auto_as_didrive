<?php

use App\Livewire\Ar\Group as ArGroup;
use App\Livewire\Phpcat\News;
use Illuminate\Support\Facades\Route;

$d = function () {

//    Route::middleware('auth')->group(function () {
//        group([
//            'middleware' => 'auth'
//        ], function () {

//    Route::middleware('auth.role')->group(
////            ['as'=>'auto_as_didrive'],
//        function () {
//                Route::view('/', 'didrive.index')->name('index');

    Route::group([
        'middleware' => 'auth.role',
        'prefix' => 'di',
//                'as' => 'didrive.'
    ], function () {

        Route::get('/', [\App\Http\Controllers\Didrive\IndexController::class, 'showDidrive'])
            ->name('index');
        Route::view('/show/{status_show}', 'didrive.index')->name('show');
//            });

        Route::view('/page1', 'didrive.page1')->name('page1');
        Route::view('/page2', 'didrive.page2')->name('page2');
        Route::view('/page3', 'didrive.page3')->name('page3');

//            });


//    Route::view('/show2', 'ar.item' )->name('show2');
//    Route::view('/list1', 'ar.list1' )->name('list1');
//
//    Route::view('/tenant', 'ar.tenants' )->name('tenant');
//    Route::view('/pays', 'ar.pays' )->name('pays');
//    Route::view('/item', 'ar.item' )->name('item');
//    Route::view('/group', 'ar.group' )->name('group');

//    Route::get('/', News::class)->name('index');

//    Route::get('services', News::class)->name('services');
//    // Route::get('/', function () { return view('phpcat.index'); });
////    Route::get('news', News::class)->name('news');
////    Route::get('torrent', News::class)->name('torrent');
////    Route::get('money', News::class)->name('money');
//    // Route::get('{.*}', News::class)->name('other');

        Route::fallback(function () {
            return redirect('/');
        });

    });

//    }

    Route::view('/', 'didrive.enter')->name('index_enter');

//    Route::get('/', [\App\Http\Controllers\Didrive\AuthController::class, 'showForm'])->name('index_enter');
//    Route::get('/', [\App\Livewire\Forms\LoginForm::class,] );
//        'livewire.pages.auth.login')->name('index_enter');
};

Route::group([
    'as' => 'autoas.didrive.',
//    'domain' => env('APP_DOMAIN', 'didrive.auto-as.local')
], $d);

//Route::group([
////    'as' => 'phpcat.',
//    'domain' => 'php-cat.com'
//], $d);
//Route::group([
////    'as' => 'phpcat.',
//    'domain' => 'livewire.php-cat.com'
//], $d);
