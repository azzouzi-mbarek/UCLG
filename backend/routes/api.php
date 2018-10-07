<?php


Route::group([

    'middleware' => 'api',


], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');


    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ResetPasswordController@process');


//    Route::get('users', 'UserController@index') ;
    Route::apiResource('users', 'UserController');

    Route::apiResource('/regions', 'RegionController');

    Route::group(['prefix' => 'regions'], function () {
        Route::apiResource('/{region}/countries', 'CountryController');

        Route::group(['prefix' => '/{regions}/countries'], function () {
            Route::apiResource('/{country}/levels', 'LevelController');
            Route::apiResource('/{country}/persons', 'PersonController');
        });
        Route::group(['prefix' => '/{regions}/countries/{country}/levels'], function () {
            Route::apiResource('/{level}/population', 'PopulationController');
            Route::apiResource('/{level}/legal_frameworks', 'LegalFrameworkController');
            Route::apiResource('/{level}/communication_tools', 'CommunicationToolController');
            Route::apiResource('/{level}/finances', 'FinanceController');
            Route::apiResource('/{level}/evenements', 'EvenementController');
            Route::apiResource('/{level}/programmes', 'ProgrammeController');
            Route::apiResource('/{level}/persons', 'PersonController');
            Route::apiResource('/{level}/institutions', 'InstitutionController');
            Route::apiResource('/{level}/indicators', 'IndicatorController');

        });

    });



});

