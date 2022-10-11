<?php
$routes->group('demo', ['namespace' => '\App\Modules\Demo\Controllers'], static function ($routes) {
    
    //Define Modules Routes
    $routes->get('', 'Main::index');
    $routes->get('cuba', 'Main::cuba');

});