<?php

return [
    'serverkey' => env('MIDTRANS_SERVER_KEY'),
    'isProduction' => env('MIDTRANS_Is_PRODUCTION'),
    'isSanitized' => env('MIDTRANS_Is_SANITIZED'),
    'is3ds' => env('MIDTRANS_Is_3DS'),

    'isProduction' => false,
    'isSanitized' => true,
    'is3ds' => true,
];



?>