<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GuestApiController;
use App\Http\Controllers\Api\Orders\OrderController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Api\ProfessionistApiController;
use App\Http\Controllers\Api\Orders\SponsorshipController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// VUEJS AXIOS API CALLS TECHNICAL
Route::get('/sponsorship', [SponsorshipController::class, 'index']);
Route::get('/profiles', [GuestApiController::class, 'index']);
Route::get('/authcheck', [GuestApiController::class, 'authcheck']);
Route::get('/unique', [GuestApiController::class, 'isUnique']);


Route::get('orders/generate', [OrderController::class, 'generate']);

Route::post('sendreview', [GuestApiController::class, 'sendReview']);
Route::post('sendmessage', [GuestApiController::class, 'sendMessage']);
Route::post('orders/makepayment', [OrderController::class, 'makePayment'])->name('pay');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('register', [RegisteredUserController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:web');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/messages/{id}', [ProfessionistApiController::class, 'getUserMessages']);
Route::post('profile/{id}/update', [ProfessionistApiController::class, 'updateProfile']);
Route::post('user/{id}/update', [ProfessionistApiController::class, 'updateUser']);
Route::post('newprofile', [ProfessionistApiController::class, 'newProfile']);




// FRONTENDAPI CALLS

Route::get('/getBundles', [ProfessionistApiController::class, 'getBundle']);
Route::get('/profile/{id}', [ProfessionistApiController::class, 'getProfileInfo']);
Route::get('/user/{id}', [ProfessionistApiController::class, 'getUserInfo']);
Route::get('/reviews/{id}', [ProfessionistApiController::class, 'getUserReviews']);
Route::get('/messages/{id}', [ProfessionistApiController::class, 'getUserMessages']);
Route::get('/getlocations', [GuestApiController::class, 'getLocations']);
Route::get('/getprofessions', [GuestApiController::class, 'getProfessions']);
Route::get('/dashinfo/{id}', [ProfessionistApiController::class, 'getDashInfo']);
Route::get('/dashleads/{id}', [ProfessionistApiController::class, 'getDashLeads']);
Route::get('/dashreviews/{id}', [ProfessionistApiController::class, 'getDashReviews']);

// FRONTENTD LENDING PAGE 
Route::get('/landingPage', [GuestApiController::class, 'landingPage']);
Route::get('/getSearchInfo', [GuestApiController::class, 'getSearchInfo']);
Route::post('/customFilter', [GuestApiController::class, 'customFilter']);
Route::get('/getProfInfo', [GuestApiController::class, 'getProfInfo']);
Route::get('/cityUser', [GuestApiController::class, 'cityUser']); // FATTO
Route::get('/promotedUser', [GuestApiController::class, 'promotedUser']); //FATTO
Route::get('/bannerUser', [GuestApiController::class, 'bannerUser']); //FATTO