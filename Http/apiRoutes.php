<?php

use Illuminate\Routing\Router;

Route::prefix('icommerceepayco')->group(function (Router $router) {
    $router->get('/', [
        'as' => 'icommerceepayco.api.epayco.init',
        'uses' => 'IcommerceEpaycoApiController@init',
    ]);

    $router->post('/confirmation', [
        'as' => 'icommerceepayco.api.epayco.confirmation',
        'uses' => 'IcommerceEpaycoApiController@confirmation',
    ]);
});
