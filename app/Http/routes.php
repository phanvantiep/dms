<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('sales', 'SalesController@index');
Route::get('sales/print_invoices', 'SalesController@print_invoices');
Route::get('sales/return_orders', 'SalesController@return_orders');
Route::get('sales/salesmans', 'SalesController@salesmans');
Route::get('sales/sales_routes', 'SalesController@sales_routes');
Route::get('sales/mean_of_tranports', 'SalesController@mean_of_tranports');
Route::get('sales/invoices', 'SalesController@invoices');
Route::get('sales/issue_reports', 'SalesController@issue_reports');

Route::get('promotion', 'PromotionController@index');

Route::get('purchasing', 'PurchasingController@index');

Route::get('ar', 'ARController@index');
Route::get('ar/customers', 'ARController@customers');
Route::get('ar/balance_reports', 'ARController@balance_reports');
Route::get('ar/recieve_reports', 'ARController@recieve_reports');

Route::get('ap', 'APController@index');
Route::get('ap/vendors', 'APController@vendors');
Route::get('ap/balance_reports', 'APController@balance_reports');
Route::get('ap/payable_reports', 'APController@payable_reports');

Route::get('inventory', 'InventoryController@index');
Route::get('inventory/products', 'InventoryController@products');
Route::get('inventory/stock_report_summaries', 'InventoryController@stock_report_summaries');
Route::get('inventory/stock_report_details', 'InventoryController@stock_report_details');

Route::get('setup', 'SetupController@index');

Route::get('info', 'InfoController@index');

Route::get('company', 'CompanyController@index');
Route::post('company/save', 'CompanyController@postSave');

Route::resource('company', 'CompanyController');

Route::get('company/profile/{id}', 'CompanyController@profile');


Route::get('user', 'UserController@index');

Route::get('lang_en', 'I18nController@en');
Route::get('lang_vi', 'I18nController@vi');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
