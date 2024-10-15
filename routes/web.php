<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs', function () {
    return view('jobs.jobs');
});
Route::get('/newsletter', function () {
    return view('newsletter');
});
Route::get('/shop', function () {
    return view('shop');
});

Route::get('/jobs-opening', function () {
    return view('jobs.jobs-opening');
});
Route::get('/job-details', function () {
    return view('jobs.job-details');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/faqs-search', function () {
    return view('faqs-search');
});
Route::get('/faqs-detail', function () {
    return view('faqs-detail');
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

// Route::get('/station-rating', function () {
//     return view('station-rating');
// });

// ======================
    // newsroom account
// ======================
Route::get('/newsroom-profile', function () {
    return view('newsroom.account.newsroom-profile');
});
Route::get('/newsroom-contact-info', function () {
    return view('newsroom.account.newsroom-contact-info');
});
Route::get('/newsroom-subscription', function () {
    return view('newsroom.account.newsroom-subscription');
});
Route::get('/newsroom-verification', function () {
    return view('newsroom.account.newsroom-verification');
});
Route::get('/newsroom-change-password', function () {
    return view('newsroom.account.newsroom-change-password');
});

// ===================
    // user account
// ===================
Route::get('/user-profile', function () {
    return view('user.account.user-profile');
});
Route::get('/user-contact-info', function () {
    return view('user.account.user-contact-info');
});
Route::get('/user-subscription', function () {
    return view('user.account.user-subscription');
});
Route::get('/user-verification', function () {
    return view('user.account.user-verification');
});
Route::get('/user-change-password', function () {
    return view('user.account.user-change-password');
});


// Route::get('/station-profile', function () {
//     return view('station-profile');
// });
Route::get('/station-profile-2', function () {
    return view('station-profile-2');
});

Route::get('/private-messages', function () {
    return view('private-messages');
});
Route::get('/subscription', function () {
    return view('subscription');
});

// ============================
    // station pages url
// ============================

// station visitor profile
Route::get('/station-visitor-profile', function () {
    return view('newsroom.station.station-visitor-profile');
});
// station logged-in
Route::get('/station-profile', function () {
    return view('newsroom.station.station-profile');
});
Route::get('/station-rating', function () {
    return view('newsroom.station.station-rating');
});
Route::get('/station-statistic', function () {
    return view('newsroom.station.station-statistic');
});
Route::get('/station-posted-jobs', function () {
    return view('newsroom.station.station-posted-jobs');
});
Route::get('/station-applied-candidates', function () {
    return view('newsroom.station.station-applied-candidates');
});
Route::get('/station-contact-info', function () {
    return view('newsroom.station.station-contact-info');
});

// user logged in
Route::get('/user-visitor-profile', function () {
    return view('user.visitor-profile');
});
Route::get('/station-user-profile', function () {
    return view('user.profile.profile');
});
    // profile sub pages
    Route::get('/edit-experience', function () {
        return view('user.profile.edit-experience');
    });
    Route::get('/edit-skills', function () {
        return view('user.profile.edit-skills');
    });
    Route::get('/edit-education', function () {
        return view('user.profile.edit-education');
    });

Route::get('/station-user-ratings', function () {
    return view('user.ratings');
});
Route::get('/station-user-applied-jobs', function () {
    return view('user.applied-jobs');
});
Route::get('/station-user-contact-info', function () {
    return view('user.contact-info');
});
Route::get('/station-user-suscribed', function () {
    return view('user.suscribed');
});
Route::get('/station-user-saved', function () {
    return view('user.saved');
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
Route::get('/add-news-director-2', function () {
    return view('popup-forms.add-news-director-2');
});
// Route::get('/job-opening-popup-form', function () {
//     return view('popup-forms.job-opening-popup-form');
// });
