<?php

use App\Livewire\Ar\Group as ArGroup;
use App\Livewire\Phpcat\News;
use Illuminate\Support\Facades\Route;

$d = function () {

//    Route::view('/show2', 'ar.item' )->name('show2');
//    Route::view('/list1', 'ar.list1' )->name('list1');
//
//    Route::view('/tenant', 'ar.tenants' )->name('tenant');
//    Route::view('/pays', 'ar.pays' )->name('pays');
//    Route::view('/item', 'ar.item' )->name('item');
//    Route::view('/group', 'ar.group' )->name('group');
    Route::view('/', 'didrive.index' )->name('index');
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
};

$inRoute = [
    [
        'as' => 'didrive.',
        'domain' => (env('APP_ENV', 'x') == 'local') ? 'didrive.auto-as.local' : 'ar.php-cat.com'
    ]
];

foreach ($inRoute as $i) {
    Route::group($i, $d);
}

//Route::group([
////    'as' => 'phpcat.',
//    'domain' => 'php-cat.com'
//], $d);
//Route::group([
////    'as' => 'phpcat.',
//    'domain' => 'livewire.php-cat.com'
//], $d);
