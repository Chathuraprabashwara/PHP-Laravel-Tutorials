<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
//all listing
Route::get('/', [ListingController::class,'index']);


//create listing
Route::get('listings/create', [ListingController::class,'create']);

//store listing
Route::post('listings', [ListingController::class,'store']);

//show edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//update listing
Route::put('listings/{listing}',[ListingController::class,'update']);

//delete listing
Route::delete('listings/{listing}',[ListingController::class,'delete']);


//single Listing
Route::get('listings/{listing}', [ListingController::class,'show']);
 


// Route::get('/hello', function(){
//     return response('<h1>Hello World</h1>', 200)
//     ->header('Content-Type','text/plain');
// });

// Route::get('/posts/{id}', function($id){
//     return response('Post ' . $id);
// })-> where ('id', '[0-9]+');


// Route::get('/search', function(Request $request){
//     dd($request);
// });