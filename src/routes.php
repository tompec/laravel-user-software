<?php

use Tompec\UserSoftware\UserSoftwareController;

Route::post('/user-software', [UserSoftwareController::class, 'store']);
