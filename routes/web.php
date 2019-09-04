<?php


//HOME PAGE


Route::get('/',[
    'uses' => 'YouthController@index',
    'as' => '/'
]);

Route::get('/category-products/{id}/{name}',[
    'uses' => 'YouthController@category',
    'as'=> 'category'
]);



Route::get('/product-details/{id}/{name}',[
    'uses'=> 'YouthController@productDetails',
    'as'=> 'product_details'
]);

Route::get('/contact',[
    'uses'=>'YouthController@contact',
    'as'=> 'contact'
]);

//Category

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/add',[
    'uses'=>'CategoryController@index',
    'as'=>'add-category'
]);

Route::post('/category/save',[
    'uses'=> 'CategoryController@saveCategory',
    'as'=> 'new-category'
]);


Route::get('/category/manage',[
    'uses' => 'CategoryController@manageCategory',
    'as' => 'manage-category'
]);

//CATEGORY C R U D START

Route::get('category/unpublished/{id}',[
    'uses' => 'CategoryController@unpublishedCategory',
    'as'=> 'unpublished_Category'
]);

Route::get('category/published/{id}',[
    'uses' => 'CategoryController@publishedCategory',
    'as'=> 'published_Category'
]);



Route::get('/edit/category/{id}',[
    'uses'=>'CategoryController@editCategory',
    'as' => 'edit_category'
]);

Route::post('/update/category',[
    'uses'=>'CategoryController@updateCategory',
    'as'=>'update-category'
]);

Route::get('/category/delete/{id}',[
    'uses'=>'CategoryController@deleteCategory',
    'as' => 'delete-category'
]);

//Brand Start

Route::get('/brand/add',[
    'uses' => 'BrandController@addBrand',
    'as'=>'add-brand'
]);

Route::post('/brand/save',[
    'uses'=>'BrandController@newBrand',
    'as'=>'new_brand'
]);

Route::get('/brand/manage',[
    'uses'=>'BrandController@manageBrand',
    'as' => 'manage-brand'
]);

Route::get('/brand/unpublished/{id}',[
    'uses' => 'BrandController@unpublishedBrand',
    'as' => 'unpublished_brand'
]);

Route::get('brand/published/{id}',[
    'uses' => 'BrandController@publishedBrand',
    'as'=>'published_brand'
]);

Route::get('brand/edit/{id}',[
    'uses'=>'BrandController@editBrand',
    'as'=>'edit_brand'
]);

Route::post('brand/update',[
    'uses'=>'BrandController@updateBrand',
    'as' => 'update_brand'
]);

Route::get('delete/brand/{id}',[
    'uses'=>'BrandController@deleteBrand',
    'as'=>'delete_brand'
]);

//Brand End

//Product Start

Route::get('/product/add',[
    'uses' => 'ProductController@addProduct',
    'as' => 'add-product'
]);

Route::post('/product/save',[
    'uses'=>'ProductController@saveProduct',
    'as'=>'new-product'
]);

Route::get('/product/manage',[
    'uses'=>'ProductController@manageProduct',
    'as'=>'manage-product'
]);

// PRODUCT C-R-U-D

Route::get('/product/edit/{id}',[
   'uses'=>'ProductController@editProduct',
   'as' => 'edit-product'
]);

Route::post('/product/update',[
    'uses' => 'ProductController@updateProduct',
    'as' => 'update-product'
]);


// ADD TO CART

Route::post('/cart/add',[
    'uses'=>'CartController@addToCart',
    'as'=>'add-to-cart'
]);

Route::get('/cart/show',[
    'uses'=> 'CartController@ShowCart',
    'as'=> 'show-cart'
]);

Route::get('/cart/delete/{id}',[
    'uses'=> 'CartController@deleteCart',
    'as'=> 'delete-cart-item'
]);

Route::post('/cart/update',[
    'uses'=> 'CartController@updateCart',
    'as'=> 'update-cart'
]);

//CHECKOUT
Route::get('/checkout',[
    'uses'=>'CheckoutController@index',
    'as'=>'checkout'
]);

Route::post('/checkout/register',[
    'uses'=> 'CheckoutController@customerSignUp',
    'as'=>'customer-sign-up'
]);

Route::get('/customer/confirm',[
    'uses'=>'CheckoutController@confirmMail',
    'as'=>'confirm-mail'
]);

Route::get('/checkout/shipping',[
    'uses'=> 'CheckoutController@shippingInfo',
    'as'=> 'checkout-shipping'
]);

Route::post('/shipping/save',[
    'uses'=>'CheckoutController@saveShippingInfo',
    'as'=> 'new-shipping'
]);

Route::get('/checkout/payment',[
    'uses'=>'CheckoutController@paymentForm',
    'as'=> 'checkout-payment'
]);

Route::post('/checkout/order',[
    'uses' => 'CheckoutController@newOrder',
    'as'=>'new-order'
]);

Route::get('/complete/order',[
    'uses' => 'CheckoutController@saveOrder',
    'as'=>'save-order'
]);

Route::post('/checkout/login',[
    'uses'=> 'CheckoutController@customerLoginCheck',
    'as'=> 'customer-log-in'
]);

Route::post('/customer/logout',[
    'uses'=> 'CheckoutController@customerLogout',
    'as'=> 'customer-logout'
]);

Route::get('/customer/login-view',[
    'uses'=> 'CustomerController@index',
    'as'=>'customer-login'
]);

Route::post('/customer/register',[
    'uses'=> 'CustomerController@newCustomerSignUp',
    'as'=>'new-customer-sign-up'
]);

Route::post('/customer/login',[
    'uses'=> 'CustomerController@newCustomerLogIn',
    'as'=>'new-customer-log-in'
]);

//CUSTOMER ORDER

Route::get('/order/manage',[
    'uses'=>'OrderController@manageOrder',
    'as'=>'manage-order'
]);

Route::get('/order/details/{id}',[
   'uses' => 'OrderController@viewOrderDetails',
    'as'=> 'order-details'
]);

Route::get('/order/view-order-invoice/{id}',[
    'uses'=> 'OrderController@viewOrderInvoice',
    'as'=>'view-order-invoice'
]);

Route::get('/view/order/{id}',[
    'uses'=>'OrderController@viewOrderDelete',
    'as'=>'view-order-delete'
]);

//Route::post('public/get-invoice-data',[
//    'uses'=> 'OrderController@newOrder',
//    'as'=>'public/get-invoice-data'
//]);




