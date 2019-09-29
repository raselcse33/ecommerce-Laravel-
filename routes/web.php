<?php

Auth::routes();

// User Routes
Route::get('/', 'FrontController@index');
Route::get('products/bycategory/{id}','FrontController@productByCategory')->name('products.bycategory');










Route::get('/user-login', 'UserController@index')->name('user-login');
Route::get('/user-register', 'UserController@register')->name('user-register');
Route::get('/wishlist', 'WishlistController@wishlist')->name('wishlist');
Route::get('/order', 'FrontController@order')->name('order');
Route::get('/cart', 'FrontController@cart')->name('cart');
Route::get('/contact', 'FrontController@contact')->name('contact');

//single page
Route::get('details/page/{id}','FrontController@detailsPage')->name('details.page');
//search option
Route::get('search','FrontController@search')->name('search');

//all category
Route::get('all/category/{id}','FrontController@allCategoryost')->name('all.category');
//all Sub Category
Route::get('all/subCategory/{id}','FrontController@allSubCategory')->name('all.sub_category');
//all sub sub category
Route::get('all/sub/sub/category/{id}','FrontController@allSubSubCategory')->name('all.sub_sub_category');
//user registration
Route::post('user/registration','UserController@userRegistration')->name('user.registration');
//user Login
Route::post('user/login','UserController@userLogin')->name('user.login');
//user Logout
Route::get('user/logout','UserController@userLogOut')->name('user-logout');
// add card
Route::get('add/card/{id}','CardController@addCard')->name('add.card');
//card Delete
Route::get('product/delete/{id}','CardController@deleteProduct')->name('product.delete');
//card incriment
Route::get('crat/incriment/{id}/{qty}','CardController@incrimentCart')->name('cart.plus');
//cart minus
Route::get('crat/minus/{id}/{qty}','CardController@decriment')->name('cart.minus');
//store wishlist
Route::get('store/wish/list/{id}','WishlistController@storeWishlist')->name('store.wishlist');
//wishList Delete
Route::get('wishlist/delete/{id}','WishlistController@deleteWishlist')->name('wishlist.delete');
//address
Route::get('address','FrontController@createAddress')->name('address');
//order
Route::post('order','OrderController@storeOrder')->name('order');
//order List
Route::get('order/list','OrderController@orderList')->name('order.list');
//details order
Route::get('details/order/{id}','OrderController@detailsOrder')->name('deteils.order');
//shift order
Route::get('shift/order/{id}','OrderController@shiftOrder')->name('shift.order');
//shift order list
Route::get('shift/order/','OrderController@shiftOrderList')->name('shift.list');
//shift details order
Route::get('shift/details/order/{id}','OrderController@shiftDetailsOrder')->name('shift.deteils.order');
// store contact
Route::post('store/contact','ContactController@storeContact')->name('store.contact');
//show contact list
Route::get('show/contact','ContactController@showContact')->name('contact.list');
//details view
Route::get('view/contact/{id}','ContactController@detailsView')->name('view.contact');
//delete contact
Route::get('delete/contact/{id}','ContactController@deleteContact')->name('contact.delete');


Route::get('/home', 'HomeController@index')->name('home');

Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
/*
 create profile => settingController
*/
 Route::get('/create/profile','SettingController@createProfile')->name('create.profile');
 Route::post('/update/profile/{id}','SettingController@updateProfile')->name('user.profile');
/*
 basic setting => settingController
*/
 Route::get('/basic/setting','SettingController@createBasicSetting')->name('create.basic.setting');
 Route::post('add/basic/setting','SettingController@storeBasicSetting')->name('store.basic.setting');
/*
 Add Product => ProductController
*/
 Route::get('/create/product','ProductController@craeteProduct')->name('create.product');
 Route::post('/store/product','ProductController@storeProduct')->name('store.product');
 Route::get('/edit/product/{id}','ProductController@editProduct')->name('edit.product');
 Route::get('/delete/product/{id}','ProductController@deleteProduct')->name('delete.product');
 /*
   cetagory:CetagoryController
 */
   Route::get('/create/cetagory','CategoryController@createCategory')->name('create.catagory');
   Route::post('store/category','CategoryController@storeCategory')->name('store.category');
   Route::post('store/sub_category','CategoryController@storeSubCategory')->name('store.sub_category');
   Route::get('get-sub-category/{id}','CategoryController@getSubCategory');
   Route::post('store/sub/sub/category','CategoryController@storeSubSubCategory')->name('store.sub_sub_category');
   /*edit update category*/
   Route::get('edit/category','CategoryController@editCategory');
   Route::post('update/category','CategoryController@updateCategory');
  /*edit update sub category*/
   Route::get('edit/subcategory','CategoryController@editSubCategory');
   Route::post('update/subCategory','CategoryController@updateSubCategory');
  /*edit update sub sub category*/
   Route::get('edit/sub/sub_category','CategoryController@editSubSubCategory');
   Route::post('update/sub/sub/category','CategoryController@updateSubSubCategory');
    /*append sub sub category when it edited*/
   Route::get('sub-category/{id}','CategoryController@get_sub_category');
   // Route::get('get-sub-category/{id}', 'CategoryController@get_sub_category_ajax');
   //create post
   Route::get('create/post','PostController@createPost')->name('create.post');
   //append post (product) category and sub category
   Route::get('product/category/{id}','PostController@getSubProduct');
  Route::get('product/category/subcategory/{is}','PostController@getSubSubProduct');

  //post store
  Route::post('store/post','PostController@storePost')->name('post.store');
  //post edit
  Route::get('edit/post/{id}','PostController@editPost')->name('edit.post');
  //edit post append subcategory and subsubcategory
Route::get('post/edit/subcategory/{id}','PostController@getEditSubCategory');
Route::get('post/edit/sub/subcategory/{id}','PostController@geteditSubSubCategory');
//update post

Route::post('update/post/{id}','PostController@updatePost')->name('update.post');



/*delete category subcategory subsubcategory post*/
Route::get('delete/category/{id}','CategoryController@deleteCategory')->name('delete.category');
Route::get('delete/subcategort/{id}','CategoryController@deleteSubcategory')->name('subCategory.delete');
Route::get('delete/sub/sub/category/{id}','CategoryController@deleteSubSubCategory')->name('subSubCategory.delete');
Route::get('delete/post/{id}','PostController@deletePost')->name('post.delete');

  });





