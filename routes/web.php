<?php

use Illuminate\Support\Facades\Route;
use App\models\news;
use App\models\services;
use App\models\about_as;
use App\models\contact;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;


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

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    $about_as=about_as::all();
    return view('about',['about_as'=>$about_as]);
});

Route::get('careers', function () {
    return view('careers');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('history', function () {
    return view('history');
});

Route::get('news', function () {
    $news=news::all();
    return view('news',['news'=>$news]);
});

Route::get('people', function () {
    return view('people');
});

Route::get('service_details_1', function () {
    return view('service_details_1');
});

Route::get('service_details_2', function () {
    return view('service_details_2');
});

Route::get('service_details_3', function () {
    return view('service_details_3');
});

Route::get('service_details_4', function () {
    return view('service_details_4');
});

Route::get('service_details_5', function () {
    return view('service_details_5');
});

Route::get('service_details_6', function () {
    return view('service_details_6');
});

Route::get('service', function () {
    $service=services::all();
    return view('service',['service'=>$service]);
});

Route::get('testimonial', function () {
    return view('testimonial');
});

Route::get('about_as', function () {
    return view('admin1.about_as')->middleware('auth');
});



//sample adminroutes
Route::get('admin', function () {
    return view('admin.index_1');
});

Route::get('admin_news', function () {
    return view('admin.admin_news');
});
Route::get('admin_service', function () {
    return view('admin.admin_service');
});

Route::get('service_main', function () {
    $service=services::all();
    return view('admin1.service',['service'=>$service]);
})->middleware('auth');

Route::get('news_main', function () {
    $news=news::all();
    return view('admin1.news',['news'=>$news]);
})->middleware('auth');

//admin page templates start


Route::get('admin1', function () {
    $service=services::all();
    $news=news::all();
    return view('admin1.index', ['service'=>$service], ['news'=>$news]);
})->middleware('auth');


//admin page itemplates end

Route::get('db', function () {

    $news=news::latest()->get();
    echo $news;
});
//services
Route::get("/admin_service_update","App\Http\Controllers\ServiceController@index")->middleware('auth');
Route::get("/admin_service/create","App\Http\Controllers\ServiceController@create")->middleware('auth');
Route::post("/admin_service_update","App\Http\Controllers\ServiceController@store")->middleware('auth');
Route::get("/admin_service/{services}","App\Http\Controllers\ServiceController@show")->middleware('auth');
Route::get("/admin_service/{services}/edit","App\Http\Controllers\ServiceController@edit")->middleware('auth');
Route::put("/admin_service/{services}","App\Http\Controllers\ServiceController@update")->middleware('auth');
Route::get("/admin_service/{services}/delete","App\Http\Controllers\ServiceController@destroy")->middleware('auth');

//news
Route::get("/admin_news_update","App\Http\Controllers\NewsController@index")->middleware('auth');
Route::get("/admin_news/create","App\Http\Controllers\NewsController@create")->middleware('auth');
Route::post("/admin_news_update","App\Http\Controllers\NewsController@store")->middleware('auth');
Route::get("/admin_news/{news}","App\Http\Controllers\NewsController@show")->middleware('auth');
Route::get("/admin_news/{news}/edit","App\Http\Controllers\NewsController@edit")->middleware('auth');
Route::put("/admin_news/{news}","App\Http\Controllers\NewsController@update")->middleware('auth');
Route::get("/admin_news/{news}/delete","App\Http\Controllers\NewsController@destroy")->middleware('auth');

//about
Route::get("/admin_about_update","App\Http\Controllers\AboutController@index")->middleware('auth');
// Route::get("/admin_about/edit","App\Http\Controllers\AboutController@store");
Route::get("/admin_about/{news}/edit","App\Http\Controllers\AboutController@edit")->middleware('auth');
Route::put("/admin_about/edit","App\Http\Controllers\AboutController@update")->middleware('auth');
Route::get("/admin_about/{news}/delete","App\Http\Controllers\AboutController@destroy")->middleware('auth');

//contact
Route::get("/admin_contact_update","App\Http\Controllers\ContactController@index")->middleware('auth');
// Route::get("/admin_about/edit","App\Http\Controllers\ContactController@store");
Route::get("/admin_contact/{contact}/edit","App\Http\Controllers\ContactController@edit")->middleware('auth');
Route::put("/admin_contact/edit","App\Http\Controllers\ContactController@update")->middleware('auth');
Route::get("/admin_contact/{contact}/delete","App\Http\Controllers\ContactController@destroy")->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get("/admin_service_update","App\Http\Controllers\OrderController@index");
// Route::get("/admin_service/create","App\Http\Controllers\OrderController@create");
Route::post("/book_order","App\Http\Controllers\OrderController@store");
Route::get("/show_book_order","App\Http\Controllers\OrderController@show");
// Route::get("/admin_service/{services}/edit","App\Http\Controllers\OrderController@edit");
// Route::put("/admin_service/{services}","App\Http\Controllers\OrderController@update");
// Route::get("/admin_service/{services}/delete","App\Http\Controllers\OrderController@destroy");

Route::get('admin/order', function () {
    return view('admin1.order');
});