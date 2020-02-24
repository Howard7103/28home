<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/','RegisterController@home');      //首頁

Route::get('/register','RegisterController@register');

Route::get('/register/{lang}',function($lang){
    \Illuminate\Support\Facades\App::setLocale($lang);
    \Illuminate\Support\Facades\Session::put('locale', $lang);
    return view('building.28home.register');});       //註冊帳號葉面

Route::post('register','RegisterController@register_save');     //帳號寫入&導向個資填寫

Route::get('register_buyer','RegisterController@buyer_create');     //買家個資填寫

Route::post('register_buyer','RegisterController@buyer_save');       //買家個資寫入

Route::get('register_vendor','RegisterController@vendor_create');     //賣家個資填寫

Route::get('/register_vendor/{lang}',function($lang = null){
    \Illuminate\Support\Facades\App::setLocale($lang);
    \Illuminate\Support\Facades\Session::get('locale', $lang);
    return view('building.28home.register_vendor');});       //註冊帳號葉面

Route::post('register_vendor','RegisterController@vendor_save');       //賣家個資寫入

Route::get('register_success','RegisterController@admin_create');       //管理者個資寫入

Route::get('login',function(){
    return view('building.28home.login');});      //登入頁面

Route::post('login_save','RegisterController@login_save');      //登入驗證

Route::get('logout','RegisterController@logout');      //登入頁面

Route::middleware("adminrole")->get('admin',function(){
    return view('building.admin');});      //管理者中介層辨識

Route::middleware("buyerrole")->get('buyer',function(){
    return view('building.buyer');});       //買家中介層辨識

Route::middleware("sellerole")->get('seller',function(){
    return view('building.seller');});     //賣家中介層辨識



//使用者個資導向
Route::get('/admin/user','UserController@user_homepage');       //導向所有使用者資料
Route::get('/admin/create','UserController@user_create');    ///新增使用者個資頁面
Route::get('/admin/create/{lang}',function($lang){
    \Illuminate\Support\Facades\App::setLocale($lang);
    \Illuminate\Support\Facades\Session::put('locale', $lang);
    return view('building.user.user_create');});
Route::post('/admin/create','UserController@user_create_save');     //帳號寫入&導向個資填寫
Route::get('/admin/create_buyer','UserController@user_buyer_create');     //買家個資填寫
Route::post('/admin/create_buyer','UserController@user_buyer_save');       //買家個資寫入
Route::get('/admin/create_vendor','UserController@user_vendor_create');     //賣家個資填寫
Route::get('/admin//create_vendor/{lang}',function($lang = null){
    \Illuminate\Support\Facades\App::setLocale($lang);
    \Illuminate\Support\Facades\Session::get('locale', $lang);
    return view('building.user.user_create_vendor');});
Route::post('/admin/create_vendor','UserController@user_vendor_save');       //賣家個資寫入
Route::get('/admin/user/{user_id}','UserController@user_update');      //使用者資料更新
Route::post('/admin/user/{user_id}','UserController@user_update_save');     //使用者資料更新寫入
Route::get('/admin/user/delete/{user_id}','UserController@user_delete');       //使用者資料刪除


Route::get('/admin/vendor','VendorsController@vendor_homepage');        //賣家資料查看
Route::get('/admin/vendor_create','VendorsController@vendor_create');       //賣家資料新增
Route::post('/admin/vendor_create','VendorsController@vendor_create_save');        //賣家資料寫入
Route::get('/admin/vendor/{vendor_id}','VendorsController@vendor_update');      //賣家資料更新
Route::post('/admin/vendor/{vendor_id}','VendorsController@vendor_update_save');     //賣家資料更新寫入
Route::get('/admin/vendor/delete/{vendor_id}','VendorsController@vendor_delete');       //賣家資料刪除

//更新新增未完成，其餘完成
Route::get('/admin/customer','CustomersController@customer_homepage');      //買家資料查看
Route::get('/admin/customer_create','CustomersController@customer_create');     //買家資料新增
Route::post('/admin/customer_create','CustomersController@customer_create_save');      //買家資料寫入
Route::get('/admin/customer/{customer_id}','CustomersController@customer_update');      //買家資料更新
Route::post('/admin/customer/{customer_id}','CustomersController@customer_update_save');     //買家資料更新寫入
Route::get('/admin/customer/delete/{customer_id}','CustomersController@customer_delete');       //賣家資料刪除

//完成
Route::get('/admin/news','NewsController@news_homepage');        //消息查看
Route::get('/admin/news_create','NewsController@news_create');      //消息新增
Route::post('/admin/news_create','NewsController@news_create_save');       //消息新增寫入
Route::get('/admin/news/{news_id}','NewsController@news_update');       //消息更正
Route::post('/admin/news/{news_id}','NewsController@news_update_save');      //消息更正寫入
Route::get('/admin/news/delete/{news_id}','NewsController@news_delete');        //刪除消息

//完成
Route::get('/admin/product','ProductController@product_homepage');     //商品查看
Route::get('/admin/product_create','ProductController@product_create');        //商品新增
Route::post('/admin/product_create','ProductController@product_create_save');     //商品新增寫入
Route::get('/admin/product/{product_id}','ProductController@product_update');      //商品資料更正
Route::post('/admin/product/{product_id}','ProductController@product_update_save');      //商品更正寫入
Route::get('/admin/product/delete/{product_id}','ProductController@product_delete');       //刪除商品資料


Route::get('/admin/poplar_use_experience', 'Popular_use_experienceController@poplar_use_experience_homepage');               //導向詢問記錄所有資料
Route::get('/admin/poplar_use_experience/{Poplar_use_experienceID}', 'Popular_use_experienceController@poplar_use_experience_read');     //詢問記錄預覽資訊
Route::get('/admin/poplar_use_experience/delete/{Poplar_use_experienceID}', 'Popular_use_experienceController@poplar_use_experience_delete');   //詢問記錄刪除單筆資料


Route::get('/admin/popular_products', 'Popular_productsController@poplar_product_homepage');                //導向推薦商品管理所有資料
Route::get('/admin/popular_products_create', 'Popular_productsController@poplar_product_create');      //導向推薦商品管理新增頁面
Route::post('/admin/popular_products_create', 'Popular_productsController@poplar_product_create_save');    //推薦商品管理新增資料儲存
Route::get('/admin/popular_products/{popular_product_id}', 'Popular_productsController@poplar_product_update');    //導向推薦商品管理更新單筆資料
Route::post('/admin/popular_products/{popular_product_id}', 'Popular_productsController@poplar_product_update_save');    //推薦商品管理更新資料儲存
Route::get('/admin/popular_products/delete/{popular_product_id}', 'Popular_productsController@poplar_product_delete');   //刪除推薦商品管理單筆資料



Route::get('/admin/popular_vendor', 'Popular_vendorController@popular_vendor_homepage');        //導向推薦廠商管理所有資料
Route::get('/admin/popular_vendor_create', 'Popular_vendorController@popular_vendor_create');   //導向推薦廠商管理新增頁面
Route::post('/admin/popular_vendor_create', 'Popular_vendorController@popular_vendor_create_save');   //推薦廠商管理新增資料儲存
Route::get('/admin/popular_vendor/{popular_vendor_id}', 'Popular_vendorController@popular_vendor_update');   //導向推薦廠商管理更新單筆資料
Route::post('/admin/popular_vendor/{popular_vendor_id}', 'Popular_vendorController@popular_vendor_update_save');   //推薦廠商管理更新資料儲存
Route::get('/admin/popular_vendor/delete/{popular_vendor_id}', 'Popular_vendorController@popular_vendor_delete');  //刪除推薦廠商管理單筆資料

