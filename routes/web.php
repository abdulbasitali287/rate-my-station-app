<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs', function () {
    return view('jobs');
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
Route::get('/faqss', function () {
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
Route::get('/faqs-search', function () {
    return view('faqs-search');
});
Route::get('/faqs-detail', function () {
    return view('faqs-detail');
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

// ======================
    // newsroom account
// ======================
Route::get('/account-settings-station-profile', function () {
    return view('newsroom.account.newsroom-profile');
});
Route::get('/account-settings-contact-info', function () {
    return view('newsroom.account.newsroom-contact-info');
});
Route::get('/account-settings-subscription', function () {
    return view('newsroom.account.newsroom-subscription');
});
Route::get('/account-settings-verification', function () {
    return view('newsroom.account.newsroom-verification');
});
Route::get('/change-password', function () {
    return view('newsroom.account.newsroom-change-password');
});

// ===================
    // user account
// ===================
Route::get('/account-settings-user-profile', function () {
    return view('user.account.user-profile');
});
Route::get('/account-settings-user-contact-info', function () {
    return view('user.account.user-contact-info');
});
Route::get('/account-settings-user-subscription', function () {
    return view('user.account.user-subscription');
});
Route::get('/account-settings-user-verification', function () {
    return view('user.account.user-verification');
});
Route::get('/user-change-password', function () {
    return view('user.account.user-change-password');
});


Route::get('/station-profile', function () {
    return view('station-profile');
});
Route::get('/station-profile-2', function () {
    return view('station-profile-2');
});

Route::get('/station-profile-3', function () {
    return view('station-profile-3');
});
Route::get('/private-messages', function () {
    return view('private-messages');
});
Route::get('/subscription', function () {
    return view('subscription');
});
Route::get('/station-visitor-profile', function () {
    return view('station-visitor-profile');
});
Route::get('/station-visitor-profile-2', function () {
    return view('station-visitor-profile-2');
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
Route::get('/apply-job-form', function () {
    return view('popup-forms.apply-job-form');
});
Route::get('/director-detail-popup', function () {
    return view('popup-forms.director-detail-popup');
});
Route::get('/station-user-statistic', function () {
    return view('station-user-statistic');
});
Route::get('/add-news-director-2', function () {
    return view('popup-forms.add-news-director-2');
});
Route::get('/job-opening-popup-form', function () {
    return view('popup-forms.job-opening-popup-form');
});
