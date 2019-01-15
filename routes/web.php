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

Auth::routes(['verify' => true]);

// Index
Route::get('/', [
    'uses' => 'IndexController@index',
    'as' => 'index'
]);

// Show company page
Route::get('/company/{company}', [
    'uses' => 'CompanyController@show',
    'as' => 'company.show'
]);

// Show job offer
Route::get('/job/{job}', [
    'uses' => 'JobController@show',
    'as' => 'job.show'
]);
Route::post('/job/{job}/apply', [
    'uses' => 'ApplyController@store',
    'as' => 'job.apply'
]);

Route::middleware(['auth', 'verified'])->group(function () {
    // DASHBOARD
    Route::get('/dashboard', [
        'uses' => 'DashboardController@index',
        'as' => 'dashboard'
    ]);
    // END DASHBOARD

    // ACCOUNT
        Route::get('/edit', [
            'uses' => 'AccountController@edit',
            'as' => 'edit'
        ]);
        Route::post('/edit/update', [
            'uses' => 'AccountController@update',
            'as' => 'update'
        ]);
    // END ACCOUNT

    // JOB
        // Post a job offer
        Route::get('/add-offer', [
            'uses' => 'JobController@create',
            'as' => 'job.create'
        ]);
        //Store a job offer
        Route::post('/add-offer', [
            'uses' => 'JobController@store',
            'as' => 'job.store'
        ]);

        // Up a job offer
        Route::get('/job/{job}/up', [
            'uses' => 'JobController@up_job',
            'as' => 'job.up'
        ]);
        // Disable a job offer
        Route::get('/job/{job}/disable', [
            'uses' => 'JobController@disable_job',
            'as' => 'job.disable'
        ]);

        // Show job applies
        Route::get('/job/{job}/applies', [
            'uses' => 'JobController@applies',
            'as' => 'job.applies'
        ]);
    // END JOB

});