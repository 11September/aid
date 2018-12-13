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

//Route::get("/", "PagesController@index");
Route::get("/", "PagesController@index");
Route::get("/roadmap", "PagesController@roadmap");
Route::get("/faq", "PagesController@faq");
Route::get("/how-it-works", "PagesController@how_it_works");
Route::get("/contacts", "PagesController@contacts");
Route::get("/about", "PagesController@about");
Route::get("/sustainable-development", "PagesController@sustainable_development");
Route::get("/aidspace-people", "PagesController@aidspace_people");
Route::get("/aidspace-maps", "PagesController@aidspace_maps");
Route::get("/legal/terms-of-service", "PagesController@terms_of_service");
Route::get("/legal/cookie-policy", "PagesController@cookie_policy");
Route::get("/legal/privacy-policy", "PagesController@privacy_policy");
Route::get("/legal/gdpr", "PagesController@gdpr");

Route::post("/mail", "PagesController@email");
