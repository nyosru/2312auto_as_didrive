<?php

use App\Livewire\Phpcat\News;
use Illuminate\Support\Facades\Route;

$d = function () {

//    Route::get('/', News::class)->name('index');
    Route::view('/', 'phpcat-files.index')->name('index');

//    Route::get('services', News::class)->name('services');
//    // Route::get('/', function () { return view('phpcat.index'); });
////    Route::get('news', News::class)->name('news');
////    Route::get('torrent', News::class)->name('torrent');
////    Route::get('money', News::class)->name('money');
//    // Route::get('{.*}', News::class)->name('other');
//    //    Route::fallback(function () { return redirect('/'); });
};

$inRoute = [
    [
        'as' => 'phpcat.',
        'domain' => (env('APP_ENV', 'x') == 'local') ? 'vk.files.php-cat.local' : 'vk.files.php-cat.com'
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
