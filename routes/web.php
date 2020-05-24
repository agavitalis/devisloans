<?php
Auth::routes(['verify'=>true]);

//Appp routes 
Route::group(['namespace'=>"Appp"],function(){
    
    Route::match(['GET','POST'],'/','IndexController@index')->name('index_page');
    Route::match(['GET','POST'],'/how_it_works','IndexController@how_it_works')->name('how_it_works');
    Route::match(['GET','POST'],'/about','IndexController@about')->name('about');
    Route::match(['GET','POST'],'/faq','IndexController@faq')->name('faq');
    Route::match(['GET','POST'],'/plans','IndexController@plans')->name('plans');
    Route::match(['GET','POST'],'/contact','IndexController@contact')->name('contact');   
    
});

//User routes guarded by tha auth and user middleware
Route::group(['namespace'=>"User"],function(){

    Route::match(['GET','POST'],'/complete_registration','CompleteRegistration@complete_registration')->name('complete_registration');
    Route::match(['GET','POST'],'/user_dashboard','DashboardController@dashboard')->name('user_dashboard')->middleware('verified');
    Route::match(['GET','POST'],'/user_profile','ProfileController@index')->name('user_profile')->middleware('verified');
    Route::match(['GET','POST'],'/user_wallet','WalletController@index')->name('user_wallet')->middleware('verified');
    Route::match(['GET','POST'],'/initiate_transaction','InitiateController@index')->name('initiate_transaction')->middleware('verified');
    Route::match(['GET','POST'],'/finalize_transaction','FinalizeController@index')->name('finalize_transaction')->middleware('verified');
    
    Route::match(['GET','POST'],'/get_investor_details','FinalizeController@get_investor_details')->name('get_investor_details')->middleware('verified');
    Route::match(['GET','POST'],'/withdraw_by_referal','WalletController@withdraw_by_referal')->name('withdraw_by_referal')->middleware('verified');


    Route::match(['GET','POST'],'/loan_request','LoanRequestController@index')->name('loan_request')->middleware('verified');
    
    Route::match(['GET','POST'],'/initiate_withdraw','WithdrawController@index')->name('initiate_withdraw')->middleware('verified');
    Route::match(['GET','POST'],'/withdraw_status','WithdrawController@status')->name('withdraw_status')->middleware('verified');
    Route::match(['GET','POST'],'/email_invite','DashboardController@email_invite')->name('email_invite')->middleware('verified');
    Route::match(['GET','POST'],'/bonus_withdraw_request','WalletController@bonus_withdraw_request')->name('bonus_withdraw_request')->middleware('verified');
    Route::match(['GET','POST'],'/other_requests','RequestingController@requesting')->name('requesting')->middleware('verified');
    
});

//Admin routes guarded by tha auth and admin middleware
Route::group(['namespace'=>"Admin"],function(){
    
    Route::match(['GET','POST'],'/admin_dashboard','DashboardController@dashboard')->name('admin_dashboard');
    Route::match(['GET','POST'],'/admin_profile','ProfileController@index')->name('admin_profile');
    Route::match(['GET','POST'],'/manage_series','SeriesController@index')->name('manage_series');

    Route::match(['GET','POST'],'/manage_pro_investors','ProInvestorsController@index')->name('manage_pro_investors');
    Route::match(['GET','POST'],'/pro_investor_details','ProInvestorsController@details')->name('pro_investor_details');
    Route::match(['GET','POST'],'/investor_match_details','ProInvestorsController@investor_match_details')->name('investor_match_details');
    Route::match(['GET','POST'],'/perform_investor_match','ProInvestorsController@perform_investor_match')->name('perform_investor_match');


    Route::match(['GET','POST'],'/manage__investors','InvestorsController@index')->name('manage__investors');
    Route::match(['GET','POST'],'/withdraw__request','InvestorsController@withdraw__request')->name('withdraw__request');
    Route::match(['GET','POST'],'/bonus__request','InvestorsController@bonus__request')->name('bonus__request');
    Route::match(['GET','POST'],'/announcements','AnnouncementController@create')->name('create_announcement');
    Route::match(['GET','POST'],'/delete_announcement/{id?}','AnnouncementController@delete')->name('delete_announcement');
    Route::match(['GET','POST'],'/referral_bonus/{id?}','ReferralBonusController@bonus')->name('referral_bonus');
    Route::match(['GET','POST'],'/manage_referral_bonus/{id?}','ReferralBonusController@manage_referral_bonus')->name('manage_referral_bonus');
    Route::match(['GET','POST'],'/manage_users/{id?}','UserController@manage_users')->name('manage_users');
    Route::match(['GET','POST'],'/delete_user/{id?}','UserController@delete_user')->name('delete_user');
    Route::match(['GET','POST'],'/ban_user/{id?}','UserController@ban_user')->name('ban_user');
    
    Route::match(['GET','POST'],'/manage_requests/{id?}','UserController@manage_requests')->name('manage_requests');
 
});

//Shows the 404 page
Route::fallback(function(){
    return view('appp.index');
});