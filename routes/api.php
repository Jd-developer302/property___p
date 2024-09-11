<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\Admin\AboutController;
use App\Http\Controllers\API\Admin\CountryController;
use App\Http\Controllers\API\Admin\CountryStateController;
use App\Http\Controllers\API\Admin\CityController;
use App\Http\Controllers\API\Admin\LocationController;
use App\Http\Controllers\API\Admin\CategoryController;
use App\Http\Controllers\API\Admin\ArticleController;
use App\Http\Controllers\API\Admin\ForeignInvestorController;
use App\Http\Controllers\API\Admin\MortgagesController;
use App\Http\Controllers\API\Admin\PdfController;
use App\Http\Controllers\API\Admin\CommunityController;
use App\Http\Controllers\API\Admin\ProjectController;
use App\Http\Controllers\API\Admin\DeveloperController;
use App\Http\Controllers\API\Admin\OverviewController;
use App\Http\Controllers\API\Admin\FeatureController;
use App\Http\Controllers\API\Admin\FloorPlanController;
use App\Http\Controllers\API\Admin\MasterPlanController;
use App\Http\Controllers\API\Admin\ProjectLocationController;
use App\Http\Controllers\API\Admin\SpecialOfferController;


use App\Http\Controllers\API\FrontEnd\ContactController;
use App\Http\Controllers\API\FrontEnd\AboutController as FrontendAboutController;
use App\Http\Controllers\API\FrontEnd\NewsArticleController;
use App\Http\Controllers\API\FrontEnd\CityController as city;
use App\Http\Controllers\API\FrontEnd\LocController;
use App\Http\Controllers\API\FrontEnd\InvestorsController;
use App\Http\Controllers\API\FrontEnd\HomeLoanController;
use App\Http\Controllers\API\FrontEnd\ProjectsController;
use App\Http\Controllers\API\FrontEnd\DevelopersController;
use App\Http\Controllers\API\FrontEnd\CommunitiesController;
use App\Http\Controllers\API\FrontEnd\OverviewsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::prefix('admin')->group(function () {
    Route::resource('about', AboutController::class);
    Route::get('countries', [CountryController::class, 'index']);
    Route::post('countries', [CountryController::class, 'store']);
    Route::get('countries/{id}', [CountryController::class, 'edit']);
    Route::put('countries/{id}', [CountryController::class, 'update']);
    Route::delete('countries/{id}', [CountryController::class, 'destroy']);
    Route::resource('states', CountryStateController::class);
    Route::resource('cities', CityController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('foreign-investors', ForeignInvestorController::class);
    Route::resource('mortgages', MortgagesController::class);
    Route::get('/pdfs', [PdfController::class, 'index']); 
    Route::post('/pdfs', [PdfController::class, 'store']); 
    Route::get('/pdfs/{id}', [PdfController::class, 'show']); 
    Route::put('/pdfs/{id}', [PdfController::class, 'update']); 
    Route::delete('/pdfs/{id}', [PdfController::class, 'destroy']); 
    Route::resource('developers', DeveloperController::class);
    Route::resource('communities', CommunityController::class);
    Route::resource('projects', ProjectController::class);
    Route::post('community_update/{id}', [CommunityController::class, 'update']);
    Route::post('projects-update/{project}', [ProjectController::class, 'update']);
    Route::resource('overviews', OverviewController::class);
    Route::post('overviews-update/{overview}', [OverviewController::class, 'update']);
    Route::resource('features', FeatureController::class);
    Route::post('features-update/{feature}', [FeatureController::class, 'update']);
    Route::resource('floorplans', FloorPlanController::class);
    Route::post('floorplans-update/{floorPlan}', [FloorPlanController::class, 'update']);
    Route::resource('masterplans', MasterPlanController::class);
    Route::post('masterplans-update/{masterPlan}', [MasterPlanController::class, 'update']);
    Route::resource('projectlocations', ProjectLocationController::class);
    Route::post('projectlocations-update/{projectLocation}', [ProjectLocationController::class, 'update']);
    Route::resource('specialoffers', SpecialOfferController::class);
    Route::post('specialoffers-update/{specialOffer}', [SpecialOfferController::class, 'update']);
});


Route::get('frontend/about', [FrontendAboutController::class, 'index']);
Route::get('/articles', [NewsArticleController::class, 'index']);
Route::get('/articles/{slug}', [NewsArticleController::class, 'show']);
Route::get('/articles/top', [NewsArticleController::class, 'topArticles']);
Route::post('/contact', [ContactController::class, 'submitContactForm']);
Route::get('cities', [city::class, 'index']);
Route::get('cities/{slug}', [city::class, 'show']);
Route::get('locations', [LocController::class, 'index']);
Route::get('investors', [InvestorsController::class, 'index']);
Route::get('investors/slug/{slug}', [InvestorsController::class, 'showBySlug']);
Route::get('/mortgage-loans-home', [HomeLoanController::class, 'index']);
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/total-by-community', [ProjectsController::class, 'getTotalProjectsByCommunity']);
Route::get('/projects/total-by-developer', [ProjectsController::class, 'getTotalProjectsByDeveloper']);
Route::get('developers/{slug}', [DevelopersController::class, 'getAllProjectsByDeveloper']);

Route::get('/develope/{slug}', [DevelopersController::class, 'findDeveloperBySlug']);

Route::get('developers/{slug}/new-launches', [DevelopersController::class, 'getNewLaunchesByDeveloper']);
Route::get('{slug}/near-completion', [DevelopersController::class, 'getNearCompletionProjectsByDeveloper']);
Route::get('/all_developers', [DevelopersController::class, 'index']);
Route::get('all_communities', [CommunitiesController::class, 'index']);
Route::get('top-communities', [CommunitiesController::class, 'topCommunities']);
Route::get('/communities/featured', [CommunitiesController::class, 'featuredCommunities']);
Route::get('/communities/{slug}', [CommunitiesController::class, 'getBySlug']);
Route::get('/overviews', [OverviewsController::class, 'index']);
Route::get('projects/{slug}', [ProjectsController::class, 'getProjectBySlug']);

