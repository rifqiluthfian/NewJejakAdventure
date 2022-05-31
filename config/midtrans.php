<?php

return [
    'serverkey' => env('MIDTRANS_SERVER_KEY',null),
    'isProducion' => env('MIDTRANS_Is_PRODUCTION',false),
    'isSanitized' => env('MIDTRANS_Is_SANITIZED',true),
    'is3ds' => env('MIDTRANS_Is_3DS',true),
];

?>