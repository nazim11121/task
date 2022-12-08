<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\InterestController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FaqController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('compare', [ProductController::class, 'compare'])->name('compare');
Route::get('add-to-compare/{id}', [ProductController::class, 'addToCompare'])->name('add.to.compare');
Route::get('emi/{id}', [ProductController::class, 'emi'])->name('emi');
Route::get('emi/percentage/{id}/{id2}', [ProductController::class, 'percentage'])->name('percentage');

Auth::routes();  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('admin/roles', RoleController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('product-lists', ProductListController::class);

    $controller_path = 'App\Http\Controllers';

    // slider
    Route::resource('admin/slider', SliderController::class);
    // product
    Route::resource('admin/product', ProductController::class);
    // interest rate
    Route::resource('admin/interest', InterestController::class);
    // faq
    Route::resource('admin/faq', FaqController::class);

    //category
    Route::get('/admin/category', $controller_path . '\backend\CategoryController@index')->name('category.list');
    Route::get('/admin/category/create', $controller_path . '\backend\CategoryController@create')->name('category.create');
    Route::post('/admin/category/store', $controller_path . '\backend\CategoryController@store')->name('category.store');
    Route::get('/admin/category/edit/{id}', $controller_path . '\backend\CategoryController@edit')->name('category.edit');
    Route::match(['put', 'patch'],'/admin/category-update/{id}', $controller_path . '\backend\CategoryController@update')->name('category.update');
    Route::delete('/admin/category/destroy/{id}', $controller_path . '\backend\CategoryController@destroy')->name('category.destroy');
    //product
    // Route::get('/admin/product-list', $controller_path . '\backend\ProductListController@index')->name('product-list');
    // Route::get('/admin/product-create', $controller_path . '\backend\ProductListController@create')->name('product-create');
    // Route::post('/admin/client-store', $controller_path . '\backend\ProductListController@store')->name('product-store');
    // Route::get('/admin/product-edit/{id}', $controller_path . '\backend\ProductListController@edit')->name('product-edit');
    // Route::match(['put', 'patch'],'/admin/product-update/{id}', $controller_path . '\backend\ProductListController@update')->name('product-update');
    // Route::delete('/admin/product-destroy/{id}', $controller_path . '\backend\ProductListController@destroy')->name('product-destroy');

});

Route::group(['middleware' => ['auth']], function () { 
	$controller_path = 'App\Http\Controllers';
    Route::get('/dashboard', $controller_path . '\backend\DashboardController@index')->name('dashboard');


$controller_path = 'App\Http\Controllers';
// authentication
// Route::get('/', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
// Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
// Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

/*backend controller start*/
// Route::get('/', $controller_path . '\backend\DashboardController@index')->name('dashboard');
//client
Route::get('/admin/client-list', $controller_path . '\backend\ClientController@index')->name('client-list');
Route::get('/admin/client-create', $controller_path . '\backend\ClientController@create')->name('client-create');
Route::post('/admin/client-store', $controller_path . '\backend\ClientController@store')->name('client-store');
Route::get('/admin/client-edit/{id}', $controller_path . '\backend\ClientController@edit')->name('client-edit');
Route::match(['put', 'patch'],'/admin/client-update/{id}', $controller_path . '\backend\ClientController@update')->name('client-update');
Route::delete('/admin/client-destroy/{id}', $controller_path . '\backend\ClientController@destroy')->name('client-destroy');

//category
Route::get('/admin/account-category-list', $controller_path . '\backend\CategoryController@index')->name('account-category-list');
Route::get('/admin/account-category-create', $controller_path . '\backend\CategoryController@create')->name('account-category-create');
Route::post('/admin/account-category-store', $controller_path . '\backend\CategoryController@store')->name('account-category-store');
Route::get('/admin/account-category-edit/{id}', $controller_path . '\backend\CategoryController@edit')->name('account-category-edit');
Route::match(['put', 'patch'],'/admin/account-category-update/{id}', $controller_path . '\backend\CategoryController@update')->name('account-category-update');
Route::delete('/admin/account-category-destroy/{id}', $controller_path . '\backend\CategoryController@destroy')->name('account-category-destroy');


//salary
Route::get('/admin/account/salary-list', $controller_path . '\backend\SalaryController@index')->name('account-salary-list');
Route::get('/admin/account/salary-create', $controller_path . '\backend\SalaryController@create')->name('account-salary-create');
Route::post('/admin/account/salary-store', $controller_path . '\backend\SalaryController@store')->name('account-salary-store');
// Route::get('/admin/account/salary-edit/{id}', $controller_path . '\backend\SalaryController@edit')->name('account-salary-edit');
// Route::match(['put', 'patch'],'/admin/account/salary-update/{id}', $controller_path . '\backend\SalaryController@update')->name('account-salary-update');
Route::delete('/admin/account/salary-destroy/{id}', $controller_path . '\backend\SalaryController@destroy')->name('account-salary-destroy');
Route::get('/admin/account/salary-create-ename', $controller_path . '\backend\SalaryController@ename')->name('account-salary-create-ename');
Route::get('/admin/account/salary-create-pjname', $controller_path . '\backend\SalaryController@pjname')->name('account-salary-create-pjname');

// Route::get('/pages/account/costing', [CostingController::class, 'index'])->name('pages-account-costing');
// Route::resource('/pages/account/costing', [CostingController::class])->name('pages-account-costing');
/*backend controller end*/

// Main Page Route
// Route::get('/dashboard', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
});
$controller_path = 'App\Http\Controllers';
// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
// Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('dynamic-forms')->name('dynamic-forms.')->group(function () {
    // Dummy route so we can use the route() helper to give formiojs the base path for this group
    Route::get('/')->name('index');

    Route::post('storage/s3', [Controllers\DynamicFormsStorageController::class, 'storeS3'])
        ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

    Route::get('storage/s3', [Controllers\DynamicFormsStorageController::class, 'showS3'])->name('S3-file-download');
    Route::get('storage/s3/{fileKey}', [Controllers\DynamicFormsStorageController::class, 'showS3'])->name('S3-file-redirect');

    Route::post('storage/url', [Controllers\DynamicFormsStorageController::class, 'storeURL'])
        ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

    Route::get('storage/url', [Controllers\DynamicFormsStorageController::class, 'showURL'])->name('url-file-download');
    Route::delete('storage/url', [Controllers\DynamicFormsStorageController::class, 'deleteURL']);

    Route::get('form', [Controllers\ResourceController::class, 'index']);
    Route::get('form/{resource}', [Controllers\ResourceController::class, 'resource']);
    Route::get('form/{resource}/submission', [Controllers\ResourceController::class, 'resourceSubmissions']);
});
