<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::namespace('Front')->group(function(){
    Route::get('/','IndexController@index');
});

Route::prefix('/admin')->namespace('Admin')->group(function(){
  //  Route::get('dashboard','AdminController@dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::prefix('/admin')->namespace('Admin')->group(function(){

    Route::group(['middleware' =>['is_admin']],function(){
         
 
        // Route::match((['get','post']),'changePassword','ProductsController@password')->middleware('auth'); 
 //Route::get('/password','ProfileController@updatePassword');
 
         //Announcement
         Route::get('announcements','AnnouncementController@announcements');
        Route::match(['get','post'],'add-edit-announcement/{id?}','AnnouncementController@addEditAnnouncement');
         Route::get('delete-announcement/{id?}','AnnouncementController@deleteAnnouncement');
  
        
     });
 
    
 
 });
