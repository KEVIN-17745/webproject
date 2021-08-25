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

Route::namespace('Front')->group(function () {
    Route::get('/', 'IndexController@index');
   
  
   // Route::post( '/make-appoinment', 'IndexController@appoinment');


});
//Route::get('/booking', 'AppoinmentController@book');
//Route::get( '/make-appoinment', 'AppoinmentController@appoinment');

Route::match(['get', 'post'], '/booking', 'AppoinmentController@appoinment')->middleware('auth');


//user appoinments
Route::get('/view-appoinments','AppoinmentController@appoinments');
//user appoinments details
Route::get('/orders/{id}','AppoinmentController@userOrderDetails');


Route::prefix('/admin')->namespace('Admin')->group(function () {
    //  Route::get('dashboard','AdminController@dashboard');
});

Route::get('/contact', function () {
    $data = App\Contact::all();

    return view('contact')->with('contacts', $data);
});



Route::post('/contact', 'PagesController@indexcontactus');
// Route::post('/contact', 'PagesController@indexresponcenew');

Route::get('/responce/{id}', 'PagesController@indexresponce');

// Route::get('/responce', 'PagesController@indexresponcenew')->name('indexresponcenew');

Route::get('/giveresponce/{id}', 'ResController@giveresponce');

Route::get('/viewresponce/{contact_id}', 'ResController@viewresponce');

// Route::get('/giveresponce/{id}', function () {
//     return view('giveresponce');
// });

Route::post('/giveresponce/data', 'ResController@indexadminresponce');


Route::get('/adminresponce', 'ResController@listResponses')->name('listResponses');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');






Route::prefix('/admin')->namespace('Admin')->group(function () {

    Route::group(['middleware' => ['is_admin']], function () {


        // Route::match((['get','post']),'changePassword','ProductsController@password')->middleware('auth'); 
        //Route::get('/password','ProfileController@updatePassword');

        //Announcement
        Route::get('announcements', 'AnnouncementController@announcements');
        Route::match(['get', 'post'], 'add-edit-announcement/{id?}', 'AnnouncementController@addEditAnnouncement');
        Route::get('delete-announcement/{id?}', 'AnnouncementController@deleteAnnouncement');
        Route::get('appoinments', 'AnnouncementController@appoinments');
       // Route::get('delete-appoinment/{id?}', 'AnnouncementController@deleteAppoinment');
       Route::match(['get', 'post'], 'update-appoinment/{id?}', 'AnnouncementController@viewDetails');
        Route::get('view-details', 'AnnouncementController@viewDetail');
        //report
         //order status
         Route::post('update-report','AnnouncementController@updateReport'); 
       

    });
});

