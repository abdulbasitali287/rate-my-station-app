<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/view-jobs', function () {
    return view('view-job');
});
Route::get('/newsletter', function () {
    return view('newsletter');
});
Route::get('/shop', function () {
    return view('shop');
});

Route::get('/jobs-opening', function () {
    return view('job-opening');
});
Route::get('/job-details', function () {
    return view('job-details');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/product-detail', function () {
    return view('product-detail');
});




Route::get('/newsletter-article', function () {
    return view('newsletter-article');
});

Route::get('/station-search', function () {
    return view('station-search');
});

Route::get('/director-search', function () {
    return view('director-search');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/station-form', function () {
    return view('station-form');
});
Route::get('/faq-search', function () {
    return view('faq-search');
});
Route::get('/faq-detail', function () {
    return view('faq-detail');
});
Route::get('/work-for-us', function () {
    return view('work-for-us');
});


Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});
Route::get('/notifications', function () {
    return view('notifications');
});

// authentication routes
Route::get('/employee-login', function () {
    return view('auth.employee-login');
});
Route::get('/newsroom-login', function () {
    return view('auth.newsroom-login');
});
Route::get('/employee-register', function () {
    return view('auth.employee-register');
});
Route::get('/newsroom-register', function () {
    return view('auth.newsroom-register');
});

Route::get('/station-rating', function () {
    return view('station-rating');
});
Route::get('/account-settings-station-profile', function () {
    return view('account-settings-station-profile');
});
Route::get('/account-settings-contact-info', function () {
    return view('account-settings-contact-info');
});
Route::get('/account-settings-subscription', function () {
    return view('account-settings-subscription');
});
Route::get('/account-settings-verification', function () {
    return view('account-settings-verification');
});
Route::get('/change-password', function () {
    return view('change-password');
});
Route::get('/station-profile', function () {
    return view('station-profile');
});
Route::get('/station-profile-2', function () {
    return view('station-profile-2');
});

Route::get('/private-messages', function () {
    return view('private-messages');
});
Route::get('/subscription', function () {
    return view('subscription');
});
Route::get('/station-profile-3', function () {
    return view('station-profile-3');
});
Route::get('/station-visitor-profile', function () {
    return view('station-visitor-profile');
});
Route::get('/station-rating-user', function () {
    return view('station-rating-user');
});
Route::get('/station-posted-job', function () {
    return view('station-posted-job');
});
Route::get('/station-posted-job-all-candidates', function () {
    return view('station-posted-job-all-candidates');
});
Route::get('/contact-info-user', function () {
    return view('contact-info-user');
});
// 8 oct 2024
Route::get('/station-visitor-profile-2', function () {
    return view('station-visitor-profile-2');
});
Route::get('/station-user-profile', function () {
    return view('station-user-profile');
});
Route::get('/station-user-ratings', function () {
    return view('station-user-ratings');
});
Route::get('/station-user-applied-jobs', function () {
    return view('station-user-applied-jobs');
});
Route::get('/station-user-contact-info', function () {
    return view('station-user-contact-info');
});
Route::get('/station-user-suscribed', function () {
    return view('station-user-suscribed');
});
Route::get('/station-user-saved', function () {
    return view('station-user-saved');
});
Route::get('/edit-experience', function () {
    return view('edit-experience');
});
Route::get('/edit-skills', function () {
    return view('edit-skills');
});
Route::get('/edit-education', function () {
    return view('edit-education');
});
Route::get('/create-news-director', function () {
    return view('popup-forms.create-news-director');
});
