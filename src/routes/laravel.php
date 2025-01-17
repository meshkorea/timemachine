<?php

use Appkr\Timemachine\Laravel\CheckIfTimemachineEnabled;

Route::group([
    'prefix' => 'timemachine',
    'namespace' => 'Appkr\Timemachine\Laravel',
    'middleware' => CheckIfTimemachineEnabled::class,
], function () {
    Route::get('/', 'TimemachineController@getTimeDiff');
    Route::put('/', 'TimemachineController@setCurrentTime');
    Route::delete('/', 'TimemachineController@resetCurrentTime');
});
