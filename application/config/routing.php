<?php

$config = [];

$config['notFoundController'] = 'error';

$config['notFoundAction'] = 'index';

$config['defaultAction'] = 'index';

$config['routeFiles'] = [
    APP_PATH . '/routes.php',
];

return $config;