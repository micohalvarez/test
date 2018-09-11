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

Route::get('/', 'PagesController@index');

Route::get('portfolio', function () {
    return view('portfolio');
});
Route::get('contactus', function () {
    return view('contactus');
});

Route::resource('projects','ProjectController');
Route::resource('products', 'ProductController');
Route::resource('pages', 'PagesController');

Route::post('contacting','PagesController@postContact');

Route::post('/updateProduct/{productid}','PagesController@updateProduct');

Route::get('products', function () {
    return view('products');
});

Route::get('Portfolio/index', 'ProjectController@index');
Route::get('Products/index', 'ProductController@create');



// Route::get('Project/projectItem', 'ProjectController@projectItem');

Route::get('/portfolio/portItem/{project_id}', 'ProjectController@projectItem');

Route::get('/products/productItem/{product_id}', 'ProductController@productItem');

// Route::get('addproduct', function(){
//     return view('admin/addproduct');
// });

// Route::get('addproject', function(){
//     return view('admin/addproject');
// });

Route::get('form', function(){
    return view('form');
});

Route::get('portitem', function(){
    return view('portitem');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/project', 'AdminController@addproject')    
    ->middleware('is_admin')    
    ->name('admin');

 Route::get('/admin/product', 'AdminController@addproduct')    
->middleware('is_admin')    
->name('admin');

Route::get('/admin/delete', 'AdminController@deleteitem')    
->middleware('is_admin')    
->name('admin');

Route::get('/projects/deleteItem/{project_id}', 'ProjectController@deleteitem')    
->middleware('is_admin')    
->name('admin');

Route::get('/products/deleteItem/{product_id}', 'ProductController@deleteitem')    
->middleware('is_admin')    
->name('admin');

Route::get('/products/editItem/{product_id}', 'ProductController@editItem')    
->middleware('is_admin')    
->name('admin');

Route::get('/projects/editItem/{project_id}', 'ProjectController@editItem')    
->middleware('is_admin')    
->name('admin');
//MOBILE ROUTES

Route::get('Project/mindex', 'ProjectController@mindex');

Route::get('/Project/mprojectItem/{project_id}', 'ProjectController@mprojectItem');

Route::get('Product/mindex', 'ProductController@mindex');

Route::get('/Product/mproductItem/{product_id}', 'ProductController@mproductItem');

Route::get('mcontact', function () {
    return view('mobile.mcontact');
});

Route::get('mform', function () {
    return view('mobile.mform');
});

