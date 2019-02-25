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



Auth::routes();

Route::get('/', 'HomeController@index')->name('index');



route::get('/v/{embed}','MovieController@embed')->name('embed');
route::get('/v/{embed}/{pass}','MovieController@player')->name('player');
Route::get('/regulations','HomeController@regulations')->name('regulations');
Route::get('/dmca','HomeController@dmca')->name('dmca');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/partnership','HomeController@partnership')->name('partnership');
Route::get('/about_us','HomeController@about_us')->name('about_us');
Route::get('/cooperation','HomeController@cooperation')->name('cooperation');
Route::get('/advertisement','HomeController@advertisement')->name('advertisement');




Route::group(['middleware' => 'auth'],function(){
    Route::get('/user','UserController@my_account')->name('my_account');
    Route::post('/user/edit/password','UserController@edit_my_account_password')->name('edit_my_account_password');
    Route::post('/user/edit/email','UserController@edit_my_account_email')->name('edit_my_account_email');
    Route::get('/user/movies', 'UserController@my_movies')->name('my_movies');
    Route::post('/user/movies/{id}', 'UserController@edit_movies')->name('edit_movies');
    Route::get('/user/movies/{id}', 'UserController@remove_movies')->name('remove_movies');
    Route::get('/user/remote','UserController@add_remote_download')->name('remote');
    Route::get('/user/remote/{title}','UserController@add_remote_search')->name('remote_search');
    Route::post('/user/remote','UserController@add_remote_download_post')->name('remote_post');
    Route::get('/movies/datatable','DataTablesController@movies')->name('datatables.movies');
    Route::post('/notifications','UserController@notifications')->name('notifications');
    Route::post('/notifications/{id}','UserController@notification_remove')->name('notification_remove');
    Route::get('/user/logout',function(){
        auth()->logout();
        return redirect()->to(route('index'));
    })->name('logout');

});
Route::group(['middleware' => 'partner'],function(){
    Route::get('/partner','Partner\PartnerIndexController@index')->name('partner.index');
    Route::get('/partner/ads','Partner\AdsController@index')->name('partner.ads');
    Route::get('/partner/ads/settings','Partner\AdsController@settings')->name('partner.ads.settings');
    Route::get('/partner/site','Partner\SiteController@index')->name('partner.site');
    Route::post('/partner/site','Partner\SiteController@edit')->name('partner.site.edit');
    Route::get('/partner/wallet/settings','Partner\WalletController@settings')->name('partner.wallet.settings');
    Route::get('/partner/wallet','Partner\WalletController@index')->name('partner.wallet');
    Route::get('/partner/ticket','Partner\TicketController@ticket')->name('partner.ticket');

});
Route::group(['middleware' => 'admin'],function(){

    Route::get('/admin','Admin\AdminIndexController@index')->name('admin.index');
    Route::get('/admin/users','Admin\AdminUsersController@index')->name('admin.users');
    Route::post('/admin/users','Admin\AdminUsersController@create')->name('admin.users.create');
    Route::get('/admin/users/{id}','Admin\AdminUsersController@remove')->name('admin.users.remove');
    Route::post('/admin/users/{id}','Admin\AdminUsersController@edit')->name('admin.users.edit');
    Route::get('/admin/datatable/users','Admin\AdminUsersController@datatable')->name('admin.datatable.users');

    Route::get('/admin/groups','Admin\AdminGroupsController@index')->name('admin.groups');
    Route::post('/admin/groups','Admin\AdminGroupsController@create')->name('admin.groups.create');
    Route::get('/admin/groups/{id}','Admin\AdminGroupsController@remove')->name('admin.groups.remove');
    Route::post('/admin/groups/{id}','Admin\AdminGroupsController@edit')->name('admin.groups.edit');
    Route::get('/admin/datatable/groups','Admin\AdminGroupsController@datatable')->name('admin.datatable.groups');

    Route::get('/admin/permissions','Admin\AdminPermissionsController@index')->name('admin.permissions');
    Route::post('/admin/permissions','Admin\AdminPermissionsController@create')->name('admin.permissions.create');
    Route::get('/admin/permissions/{id}','Admin\AdminPermissionsController@remove')->name('admin.permissions.remove');
    Route::post('/admin/permissions/{id}','Admin\AdminPermissionsController@edit')->name('admin.permissions.edit');
    Route::get('/admin/datatable/permissions','Admin\AdminPermissionsController@datatable')->name('admin.datatable.permissions');

    Route::get('/admin/files','Admin\AdminFilesController@index')->name('admin.files');
    //Route::post('/admin/files','Admin\AdminPermissionsController@create')->name('admin.permissions.create');
    Route::get('/admin/files/{id}','Admin\AdminFilesController@remove')->name('admin.files.remove');
    Route::post('/admin/files/{id}','Admin\AdminFilesController@edit')->name('admin.files.edit');
    Route::post('/admin/files/accept/{id}','Admin\AdminFilesController@accept')->name('admin.files.accept');
    Route::post('/admin/files/discard/{id}','Admin\AdminFilesController@discard')->name('admin.files.discard');
    Route::get('/admin/datatable/files','Admin\AdminFilesController@datatable')->name('admin.datatable.files');


    Route::get('/admin/servers','Admin\AdminServersController@index')->name('admin.servers');
    Route::post('/admin/servers','Admin\AdminServersController@create')->name('admin.servers.create');
    Route::get('/admin/servers/{id}','Admin\AdminServersController@remove')->name('admin.servers.remove');
    Route::post('/admin/servers/{id}','Admin\AdminServersController@edit')->name('admin.servers.edit');
    Route::post('/admin/servers/turn_on/{id}','Admin\AdminServersController@turn_on')->name('admin.servers.turn_on');
    Route::post('/admin/servers/turn_off/{id}','Admin\AdminServersController@turn_off')->name('admin.servers.turn_off');
    Route::get('/admin/datatable/servers','Admin\AdminServersController@datatable')->name('admin.datatable.servers');

    Route::get('/admin/settings','Admin\AdminSettingsController@settings')->name('admin.settings');
    Route::post('/admin/settings','Admin\AdminSettingsController@edit')->name('admin.settings.edit');

    Route::get('/admin/partners','Admin\AdminPartnersController@index')->name('admin.partners');
    Route::post('/admin/partners','Admin\AdminPartnersController@create')->name('admin.partners.create');
    Route::get('/admin/partners/{id}','Admin\AdminPartnersController@remove')->name('admin.partners.remove');
    Route::post('/admin/partners/{id}','Admin\AdminPartnersController@edit')->name('admin.partners.edit');
    Route::get('/admin/datatable/partners','Admin\AdminPartnersController@datatable')->name('admin.datatable.partners');


    Route::get('/admin/payments/cash/in','Admin\AdminPaymentsController@cash_in')->name('admin.payments.cash_in');
    Route::get('/admin/payments/cash/out','Admin\AdminPaymentsController@cash_out')->name('admin.payments.cash_out');
    Route::get('/admin/ads/ads','Admin\AdminAdsController@ads')->name('admin.ads.ads');
});
