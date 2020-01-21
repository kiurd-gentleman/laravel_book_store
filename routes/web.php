<?php

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
|
*/

/*use Illuminate\Routing\Route;*/

Route::get('/', 'frontend\PagesController@index')->name('index');
Route::get('/product-grid', 'frontend\PagesController@product_grid')->name('home.product-grid');
Route::get('/contact', 'frontend\PagesController@contact')->name('home.contact');
Route::get('/login-or-registration', 'frontend\PagesController@loginOrRegistration')->name('home.login-or-registration');
Route::get('/checkout', 'frontend\PagesController@checkout')->name('home.checkout');
Route::get('/view-cart', 'frontend\PagesController@view_cart')->name('home.view-cart');
Route::get('/search-result', 'frontend\PagesController@search')->name('product.search');
Route::get('/product-details/{id}', 'frontend\PagesController@product_details')->name('home.product-details');
/*Route::post('/user/log-in', 'Auth\LoginController@user_login')->name('home.user.login');*/

Route::post('/user/log-in', 'frontend\LoginController@user_login')->name('home.user.login');
Route::post('/user/registration', 'frontend\LoginController@user_registration')->name('home.user.registration');
Route::get('/user/logout', 'frontend\LoginController@logout')->name('home.logout');
Route::get('/user-notification/{remember_token}', 'frontend\LoginController@verify')->name('user.activation');

/*add to cart*/
Route::get('/add-to-cart/{id}' , 'frontend\AddToCartController@add_to_cart')->name('product.addToCart');
Route::get('/remove/{id}' , 'frontend\AddToCartController@remove')->name('product.remove');
Route::post('/update' , 'frontend\AddToCartController@cartUpdate')->name('cart.update');
/*Route::resource('/cart' , 'frontend\CartController');*/

/*Route::get('send', 'frontend\LoginController@send');*/

Route::get('test/{id}/{quantity}','frontend\AddToCartController@updateCartItem');










/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/
/*
|--------------------------------------------------------------------------
| Admin product Routes
|--------------------------------------------------------------------------
|
|
*/


Route::group(['prefix'=>'admin'] , function (){
    Route::get('/', 'backend\AdminPagesController@index')->name('admin.index');
    Route::get('/add-product', 'backend\AdminPagesController@add_product')->name('admin.add-product');
    Route::get('/products', 'backend\AdminPagesController@products_show')->name('admin.products');
    Route::post('product/store', 'backend\AdminPagesController@product_store')->name('admin.product.store');
  /*  Route::group(['namespace' => 'admin/product/edit/{id}'], function() {*/
//        Route::get('admin/product/cat/show', 'CategoryController@category_show');
    Route::get('/product/edit/{id}', 'backend\AdminPagesController@product_edit')->name('admin.product.edit');
    Route::post('/edit/submit/{id}', 'backend\AdminPagesController@product_edit_submit')->name('admin.edit.submit');
    Route::post('/submit/delete/{id}', 'backend\AdminPagesController@product_delete')->name('admin.submit.delete');
//    });
   /* Route::get('admin/product-details', 'AdminPagesController@product_details');*/
});

/*
|--------------------------------------------------------------------------
| Admin categories Routes
|--------------------------------------------------------------------------
|
|
*/
Route::group(['prefix'=>'admin'] , function (){
    Route::get('/category', 'backend\CategoryController@category_display')->name('admin.category');
    Route::get('/add-category', 'backend\CategoryController@category_insert')->name('admin.add-category');
    Route::post('category/store', 'backend\CategoryController@category_store')->name('admin.category.store');
    Route::get('/category/edit/{id}', 'backend\CategoryController@category_edit')->name('admin.category.edit');
    Route::post('/category/edit/submit/{id}', 'backend\CategoryController@category_edit_submit')->name('admin.category.edit.submit');
    Route::post('/category/delete/{id}', 'backend\CategoryController@category_delete')->name('admin.category.delete');
//    Route::get('/products', 'backend\AdminPagesController@products_show')->name('admin.products');
//    Route::post('product/store', 'backend\AdminPagesController@product_store')->name('admin.product.store');
//    /*  Route::group(['namespace' => 'admin/product/edit/{id}'], function() {*/
////        Route::get('admin/product/cat/show', 'CategoryController@category_show');
//    Route::get('/product/edit/{id}', 'backend\AdminPagesController@product_edit')->name('admin.product.edit');
//    Route::post('/edit/submit/{id}', 'backend\AdminPagesController@product_edit_submit')->name('admin.edit.submit');
//    Route::post('/submit/delete/{id}', 'backend\AdminPagesController@product_delete')->name('admin.submit.delete');
    /* Route::get('admin/product-details', 'AdminPagesController@product_details');*/
});


/*Auth::routes();
Route::middleware('auth')->get('/home', 'HomeController@index')->name('home');*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
