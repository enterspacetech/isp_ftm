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

// Dashboard
Route::get('/', 'HomeController@Index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Categories
Route::get('/Categories', 'CategoriesController@Index');
Route::get('/Categories/Add', 'CategoriesController@Create');
Route::get('/Categories/Edit/{id}','CategoriesController@Show');

//Categories Saving
Route::post('/Categories/AddCategory', 'CategoriesController@Store');
Route::match(['put', 'patch'], '/Categories/EditCategory/{id}','CategoriesController@Update');
Route::get('/Categories/Delete/{id}','CategoriesController@Destroy');

//Products
Route::resource('products', 'ProductController');

// API
// get
Route::get('/api/getCategories', 'APIController@getCategories')->name("api.getCategories");
Route::get('/api/getSuppliers', 'APIController@getSuppliers')->name('api.getSuppliers');
Route::get('/api/getWarehouse', 'APIController@getWarehouse')->name('api.getWarehouse');
Route::get('/api/getSections', 'APIController@getSections')->name('api.getSections');
Route::get('/api/getProducts/{type}', 'APIController@getProducts')->name('api.getProducts');
Route::get('/api/getBrands', 'APIController@getBrands')->name('api.getBrands');
Route::get('/api/getStores', 'APIController@getStores')->name('api.getStores');
Route::get('/api/getUOM', 'APIController@getUOM')->name('api.getUOM');
Route::get('/api/getPurchaseOrders', 'APIController@getPurchaseOrders');
Route::get('/api/getSalesOrders', 'APIController@getSalesOrders');

// search
Route::get('/api/searchCategories', 'APIController@searchCategories')->name('api.searchCategories');
Route::get('/api/searchSuppliers', 'APIController@searchSuppliers')->name('api.searchSuppliers');
Route::get('/api/searchWarehouse', 'APIController@searchWarehouse')->name('api.searchWarehouse');
Route::get('/api/searchSections', 'APIController@searchSections')->name('api.searchSections');
Route::get('/api/searchBrands', 'APIController@searchBrands');
Route::get('/api/searchPurchaseStatus', 'APIController@searchPurchaseStatus');
Route::get('/api/searchProducts', 'APIController@searchProducts');
Route::get('/api/searchUnitOfMeasure', 'APIController@searchUnitOfMeasure');
Route::get('/api/searchStores', 'APIController@searchStores');
Route::get('/api/searchFinishedProducts', 'APIController@searchFinishedProducts');

// populate or fetch
Route::get('/api/populateProducts/{id}', 'APIController@populateProducts');
Route::get('/api/populateFinishedProducts/{id}', 'APIController@populateFinishedProducts');

// Suppliers
Route::get('/suppliers', 'SuppliersController@index');
Route::get('/suppliers/create', 'SuppliersController@create');
Route::post('/suppliers/store', 'SuppliersController@store');
Route::get('/suppliers/edit/{id}', 'SuppliersController@edit');
Route::match(['put', 'patch'], '/suppliers/update/{id}', 'SuppliersController@update');
Route::get('/suppliers/delete/{id}', 'SuppliersController@destroy');


//Warehouse
Route::get('/Warehouse', 'WarehouseController@index');
Route::get('/Warehouse/Add', 'WarehouseController@Create');
Route::get('/Warehouse/Edit/{id}','WarehouseController@Show');
//Warehouse saving
Route::post('/Warehouse/AddWarehouse', 'WarehouseController@Store');
Route::match(['put', 'patch'], '/Warehouse/EditWarehouse/{id}','WarehouseController@Update');
Route::get('/Warehouse/Delete/{id}','WarehouseController@Destroy');

//Sections
Route::get('/Section', 'SectionController@index');
Route::get('/Section/Add', 'SectionController@Create');
Route::get('/Section/Edit/{id}','SectionController@Show');
//Sections saving
Route::post('/Section/AddSection', 'SectionController@Store');
Route::match(['put', 'patch'], '/Section/EditSection/{id}','SectionController@Update');
Route::get('/Section/Delete/{id}','SectionController@Destroy');

//Brand
Route::resource('brands', 'BrandController');

// Purchases
Route::resource('purchases', 'PurchaseOrderController');

// Sales Orders
Route::resource('salesorders', 'SalesOrderController');

//Store
Route::resource('stores', 'StoreController');

//Unit of Measure
Route::resource('uom', 'UnitOfMeasureController');

// Print
Route::get('/print/purchase_order/{id}', 'PrintController@printPurchaseOrder');


// API Token
Route::get('/api/token', 'APITokenController@update');
