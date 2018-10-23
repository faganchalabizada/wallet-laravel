<?php
/*Route::group(['prefix' => 'admin'], function () {
    Route::get('account-type/{id?}',['middleware' => 'WalletMiddleware','uses' =>'faganchalabizada\wallet\WalletController@showAccountTypeForm']);
    Route::post('account-type/',['middleware' => 'WalletMiddleware','uses' =>'faganchalabizada\wallet\WalletController@saveAccountType']);
    Route::get('transaction-type/{id?}',['middleware' => 'WalletMiddleware','uses' =>'faganchalabizada\wallet\WalletController@showTransactionTypeForm']);
    Route::post('transaction-type/',['middleware' => 'WalletMiddleware','uses' =>'faganchalabizada\wallet\WalletController@saveTransactionType']);
    Route::get('view-transaction-type/',['middleware' => 'WalletMiddleware','uses' =>'faganchalabizada\wallet\WalletController@showTransactionType']);
    Route::get('view-account-type/',['middleware' => 'WalletMiddleware','uses' =>'faganchalabizada\wallet\WalletController@showAccountType']);
    Route::get('view-transaction/{transaction_id?}/{user_id?}',['middleware' => 'WalletMiddleware','uses' =>'faganchalabizada\wallet\WalletController@showTransaction']);
    Route::get('login','faganchalabizada\wallet\WalletAuthController@login');
    Route::post('login','faganchalabizada\wallet\WalletAuthController@doLogin');
    Route::get('dashboard',['middleware' => 'WalletMiddleware','uses' => 'faganchalabizada\wallet\WalletAuthController@dashboard']);
    Route::get('logout','faganchalabizada\wallet\WalletAuthController@logout');
    Route::get('change-password',['middleware' => 'WalletMiddleware','uses' => 'faganchalabizada\wallet\WalletAuthController@changePassword']);
    Route::post('change-password',['middleware' => 'WalletMiddleware','uses' => 'faganchalabizada\wallet\WalletAuthController@doChangePassword']);
    Route::get('rebuild-user-total/{user_id?}','faganchalabizada\wallet\WalletController@rebuildUserTotalBalance');
});*/
Route::get('test','faganchalabizada\wallet\controller\WalletController@test');