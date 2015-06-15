<?php

$app->get('/', function() {
    return 'NOTHING';
});

$app->get('{url}', 'App\Http\Controllers\CheckController@check');
