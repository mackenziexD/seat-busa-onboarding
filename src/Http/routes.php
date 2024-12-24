<?php

    Route::group([
        'namespace'  => 'Helious\SeatBusaOnboarding\Http\Controllers',
        'middleware' => ['web', 'auth', 'locale'],
        'prefix' => 'onboarding',
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

    });