<?php

    Route::group([
        'namespace'  => 'Helious\SeatBusaOnboarding\Http\Controllers',
        'middleware' => ['web', 'auth', 'locale'],
        'prefix' => 'recruitment_guide',
    ], function () {


        Route::get('/', [
            'uses' => 'OnboardingController@index',
            'as' => 'seat-busa-onboarding::index',
        ]);

        Route::get('/edit', [
            'uses' => 'OnboardingController@edit',
            'as' => 'seat-busa-onboarding::edit',
            'middleware' => 'can:onboarding.manage',
        ]);

        Route::post('/edit/update', [
            'uses' => 'OnboardingController@storeEdit',
            'as' => 'seat-busa-onboarding::store',
            'middleware' => 'can:onboarding.manage',
        ]);

    });