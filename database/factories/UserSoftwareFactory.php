<?php

use Tompec\UserSoftware\UserSoftware;

$factory->define(UserSoftware::class, function () {
    return [
        'user_id' => 1,
        'data' => [
            'os' => 1,
            'browser' => 2,
        ],
    ];
});
