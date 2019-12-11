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

Route::get('/','HomeCotroller@index')->name('home');
// Route::get('product/{id_loai}','ProductController@Product');
// Route::get('product/{id_loai}',[
// 	'as'=>'loaisanpham',
// 	'uses'=>'ProductController@Product'
// ]);

Route::get('/about','HomeCotroller@about')->name('about');

Route::get('/contact','ContactController@getContact')->name('contact');
Route::post('/contact','ContactController@postContact');

//loai_sanpham
Route::get('/product/{id_loai}','ProductController@Product')->name('categoryproduct'); //{id_loai} LÀ MỘT THAM SỐ BẤT KÌ ( CÓ THỂ LÀ {id} ) KHÔNG NHẤT THIẾT PHẢI TRÙNG VỚI THAM SỐ TRONG FUNCTION CONTROLLSER
// Route::get('/productdetail/{id}','ProductDetailController@Product_detail')->name('productdetail');

//chi tiet san pham
Route::get('/productdetail/{id_sp}','ProductDetailController@Product_detail')->name('productdetail');

//trang them vo gio hang
Route::get('/add-cart/{ma_san_pham}','CartController@addCart')->name('add.cart');

//hien thi thong tin gio hang
Route::get('/cart','CartController@showCart')->name('show.cart');

//xoa gio hang
Route::get('/delete-cart/{ma_san_pham}','CartController@deleteCart')->name('delete.cart');

//login
Route::get('/login','LoginController@Get_login');
Route::post('/login','LoginController@Post_Login');

//logout
Route::get('/logout','LogoutController@Logout');

//register
Route::get('/register','RegisterController@Get_register')->name('register');
Route::post('/register','RegisterController@Post_register');

//checkout
Route::get('/checkout','CheckoutController@Get_checkout');
Route::post('/checkout','CheckoutController@Post_checkout')->name('post.checkout');

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ADMIN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
Route::group(['prefix'=>'admin'],function(){
    Route::get('/home','adminHomeController@index')->name('admin.home');//chạy admin/home

    Route::group(['prefix'=>'category'],function(){
        Route::get('/index','adminCategoryController@index')->name('category.index'); //chạy admin/category
        Route::get('/detail/{id_cate}','adminCategoryController@detail')->name('category.detail');
        Route::get('/create','adminCategoryController@getCreate')->name('category.create');
        Route::post('/create','adminCategoryController@postCreate');
        Route::get('/edit/{id_cate}','adminCategoryController@getEdit')->name('category.edit');
        Route::post('/edit/{id_cate}','adminCategoryController@postEdit');
        Route::get('/delete/{id_cate}','adminCategoryController@getDelete')->name('category.delete');
    });

    Route::group(['prefix'=>'bill'],function(){
        Route::get('/index','adminBillController@index')->name('bill.index');
        Route::get('/detail/{id_bill}','adminBillController@detail')->name('bill.detail');
        Route::get('/delete/{id_bill}','adminBillController@getDelete')->name('bill.delete');
    });

    Route::group(['prefix'=>'product'],function(){
        Route::get('/index','adminProductController@index')->name('product.index'); 
        Route::get('/detail/{id_product}','adminProductController@detail')->name('product.detail');
        Route::get('/create','adminProductController@getCreate')->name('product.create');
        Route::post('/create','adminProductController@postCreate');
        Route::get('/edit/{id_product}','adminProductController@getEdit')->name('product.edit');
        Route::post('/edit/{id_product}','adminProductController@postEdit');
        Route::get('/delete/{id_product}','adminProductController@getDelete')->name('product.delete');
    });

    Route::group(['prefix'=>'member'],function(){
        Route::get('/index','adminMemberController@index')->name('member.index'); 
        Route::get('/detail/{id_member}','adminMemberController@detail')->name('member.detail');
        Route::get('/create','adminMemberController@getCreate')->name('member.create');
        Route::post('/create','adminMemberController@postCreate');
        Route::get('/edit/{id_member}','adminMemberController@getEdit')->name('member.edit');
        Route::post('/edit/{id_member}','adminMemberController@postEdit');
        Route::get('/delete/{id_member}','adminMemberController@getDelete')->name('member.delete');
    });
}); 

// Route::get('/admin','adminHomeController@index');=>ko chay dc
// Route::get('/admin/category/index','adminCategoryController@index');