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




Route::get('/login', 'Auth\AuthController@getLogin');
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');


//Route::get('/','LoginController@login');
//Route::get('/login','LoginController@login');




Route::get('/routes', 'RouteController@route_main');
Route::get('/insert-routes', 'RouteController@insert_routes');
Route::get('/get-routes', 'RouteController@get_routes');
Route::get('/get_route_info', 'RouteController@get_route_info');
Route::get('/edit_routes', 'RouteController@edit_routes');
Route::get('/del_routes', 'RouteController@del_routes');


Route::get('/reps', 'RepController@rep_main');
Route::get('/insert-reps', 'RepController@insert_reps');
Route::get('/get-reps', 'RepController@get_reps');
Route::get('/get_rep_info', 'RepController@get_rep_info');
Route::get('/edit_reps', 'RepController@edit_reps');
Route::get('/del_reps', 'RepController@del_reps');


Route::get('/customers', 'CustomerController@customer_main');
/*Route::get('/customers', function(){

    dd(Auth::user());
    //dd( Auth::check());
    //var_dump(Auth::user());
    //var_dump(Auth::check());
    //return Auth::user();
});*/


Route::get('/insert-customer', 'CustomerController@insert_customer');
Route::get('/get-customer', 'CustomerController@get_customer');
Route::get('/get_customer_info', 'CustomerController@get_customer_info');
Route::get('/edit_customer', 'CustomerController@edit_customer');
Route::get('/del_customer', 'CustomerController@del_customer');


Route::get('/vehicles', 'VehicleController@vehicle_main');
Route::get('/insert-vehicles', 'VehicleController@insert_vehicles');
Route::get('/get-vehicles', 'VehicleController@get_vehicles');
Route::get('/get_vehicle_info', 'VehicleController@get_vehicle_info');
Route::get('/edit_vehicles', 'VehicleController@edit_vehicles');
Route::get('/del_vehicles', 'VehicleController@del_vehicles');




Route::get('/categories', 'CategoryController@category_main');
Route::get('/insert-category', 'CategoryController@insert_category');
Route::get('/get-category', 'CategoryController@get_category');
Route::get('/get_category_info', 'CategoryController@get_category_info');
Route::get('/edit_category', 'CategoryController@edit_category');
Route::get('/del_category', 'CategoryController@del_category');

Route::get('/insert-brand', 'BrandController@insert_brand');
Route::get('/get-brand', 'BrandController@get_brand');
Route::get('/get_brand_info', 'BrandController@get_brand_info');
Route::get('/edit_brand', 'BrandController@edit_brand');
Route::get('/del_brand', 'BrandController@del_brand');





Route::get('/products', 'ProductController@product_main');
Route::get('/insert-product', 'ProductController@insert_product');
Route::get('/insert-sproduct', 'ProductController@insert_sproduct');
Route::get('/get-subproduct', 'ProductController@get_subproduct');
Route::get('/get_product_info', 'ProductController@get_product_info');
Route::get('/edit_product', 'ProductController@edit_product');
Route::get('/del_sp', 'ProductController@del_sp');
Route::get('/del_product', 'ProductController@del_product');

Route::get('/get-products', 'ProductController@get_products');
Route::get('/get-subproducts', 'ProductController@get_subproducts');


Route::get('/grn', 'StockController@grn');
Route::get('/get-grn', 'StockController@get_grn');
Route::get('/del_grns', 'StockController@del_grns');
Route::get('/astocks', 'StockController@main');
Route::get('/insert-stock', 'StockController@insert_stock');
Route::get('/insert-stock_main', 'StockController@insert_stock_main');
Route::get('/get-stock', 'StockController@get_stock');
Route::get('/get_stock_info', 'StockController@get_stock_info');
Route::get('/edit_stock', 'StockController@edit_stock');
Route::get('/del_stock', 'StockController@del_stock');
Route::get('/get-activestocks', 'StockController@get_activestocks');
Route::get('/stock_history', 'StockController@stock_history');
Route::get('/get-stock-history', 'StockController@get_stock_history');
Route::get('/get-stock-info','StockController@get_stock_info');

Route::get('/discard-stocks','StockController@discard');
Route::get('/insert_discard','StockController@insert_discard');

Route::get('/pstocks','StockController@pstocks');
Route::get('/get-pending-list','StockController@get_pending_list');
Route::get('/save-pending','StockController@save_pending');




Route::get('/load','VehicleController@load');
Route::get('/getActive-vehicles', 'VehicleController@active_vehicles');
Route::get('/load-view', 'VehicleController@load_vehicle');
Route::get('/insert_load', 'VehicleController@insert_load');
Route::get('/insert_reload', 'VehicleController@insert_reload');

Route::get('/active-vehicles','VehicleController@active');
Route::get('/getLoaded-vehicles', 'VehicleController@loaded_vehicles');
Route::get('/unload-view', 'VehicleController@unload');
Route::get('/reload-view', 'VehicleController@reload');
Route::get('/unloadall', 'VehicleController@unloadall');



Route::get('/history-view', 'VehicleController@history_view');
Route::get('/load-history', 'VehicleController@loadHistory');
Route::get('/search_load', 'VehicleController@search_load');


Route::get('/sales','SalesController@sales');
Route::get('/insert_sales_all','SalesController@insert_sales_all');
Route::get('/getsaleshisotry','SalesController@getsaleshisotry');
Route::get('/daily_sales','SalesController@daily_sales');
Route::get('/getdailysales','SalesController@getdailysales');



Route::get('/customer_sales','SalesController@customer_sales');
Route::get('/docDelete','SalesController@docDelete');
Route::post('/post_upload','SalesController@post_upload');
Route::get('/insert_customer_sales','SalesController@insert_customer_sales');
Route::get('/getdailysalesCus','SalesController@getdailysalesCus');
Route::get('/customersales_view','SalesController@customersales_view');

Route::get('/Sales-summary-items','ReportController@SalesItemWise');
Route::get('/sales_summary_itemwise_info','ReportController@sales_summary_itemwise_info');

Route::get('/Sales-summary-customer','ReportController@SalesCustomerWise');
Route::get('/sales_summary_customerwise_info','ReportController@sales_summary_customerwise_info');



Route::get('/Sales-summary-unpaid','ReportController@SalesUnpaid');
Route::get('/sales_unpaidReport','ReportController@unpaidReport');


Route::get('/vendors','VendorController@vendors');
Route::get('/vendor_save','VendorController@save_vendor');
Route::get('/vendor_update','VendorController@update_vendor');
Route::get('/vendor_delete','VendorController@vendor_delete');
Route::get('/vendor_get','VendorController@get_vendors');
Route::get('/vendor_get_info','VendorController@vendor_get_info');


