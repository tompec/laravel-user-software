<?php

use Tompec\UserSoftware\UserSoftwareController;

Route::middleware(config('user-software.middlewares'))->group(function () {
    Route::post('/user-software', [UserSoftwareController::class, 'store']);
});
