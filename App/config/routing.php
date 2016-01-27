<?php

$config = [];

$config['notFoundController'] = '\\App\\Controllers\\Error';

$config['notFoundAction'] = 'index';

$config['defaultAction'] = 'index';

$config['routeFiles'] = [
    APP_PATH . '/routes.php',
];

return $config;