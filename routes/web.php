<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psy\VersionUpdater\Downloader;

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



// Route::get('/Home', function (Request $request ) {

//     // dd(
//     //     // "laravel9",
//     //     $request->path(), //path name
//     //     $request->is('/Home'),

//     //     $request->fullUrl(),
//     //     $request->host(),
//     //     $request->httpHost(),
//     //     $request->schemeAndHttpHost(),


//     //     $request->route('Home'),
//     //     $request->header('X-header-Name'),
//     //     $request->header('X-header-Name,default'),
//     //      $request->bearerToken(),

//     //      $request->ip(),
//     //      $request->prefers(['text/html','application/jason']),
// // );


//     return redirect('/Contact/value');
// })->name('Home');

// Route::get('/About/all-shopping', function ( ) {
//     $About = 'This is About Page';
//     $name = "Mithun";
//     $age = '22';
//      return  view('About',compact('name','age','About')
//     );
// })->name('About');


// Route::get('/Contact/value', function ( ) {
// $page_name = 'This is Contact Page';

// $products= [
//     1 =>[
//         'name' => 'Bag',
//         'color' => 'Red',
//         'price' => '1250',
//     ],
//     2 =>[
//         'name' => 'Sunglass',
//         'color' => 'Black',
//         'price' => '550',
//     ],
//     3 =>[
//         'name' => 'Mobile',
//         'color' => 'Dark',
//         'price' => '22550',
//     ]
// ];

// $product_count = count( $products );

//      return  view('Contact',
//      compact('page_name',
//      'product_count',
//      'products'));
// })->name('Contact');


// Route::get('/Services', function ( ) {
//     $services = ['web_devlopment','Web_design','graphich_Design','SEO'];
//      return  view('Services',compact('services'));
// })->name('Services');


//  Route::get('/mushroom/download',function(){
// return response()->download(public_path('mushroom.pdf'),'this is mushroom pdf book ,you can download it');
//  });





 Route::prefix('page')->name('laravel.')->group(function(){

    Route::get('/Home',function(){
        return view('Home');
    })->name('Home');
    Route::get('/About',function(){
        return view('About');
    })->name('About');
    Route::get('/Contact',function(){
        return view('Contact');
    })->name('Contact');
    Route::get('/Services',function(){
        return view('Services');
    })->name('Services');

 });


 Route::prefix('page')->name('mithun.')->group(function(){

    Route::get('/Home',function(){
        return view('Home');
    })->name('Home');
    Route::get('/About',function(){
        return view('About');
    })->name('About');
    Route::get('/Contact',function(){
        return view('Contact');
    })->name('Contact');
    Route::get('/Services',function(){
        return view('Services');
    })->name('Services');

 });
