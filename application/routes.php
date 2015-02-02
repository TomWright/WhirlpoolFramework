<?php

/**
 * Routing Examples
 *
 * $router->add(routeName, routeUri)
 *      ->addTokens([
 *          array, of, tokens, for, the, routeUri
 *      ])
 *      ->addValues([
 *          array, of, values, accessible, from, route, later
 *      ]);
 *
 * $router->add('blog.read', 'blog/read/{id}')
 *      ->addTokens([
 *          'id' => '\d+',
 *      ])
 *      ->addValues([
 *          'controller' => 'Blog',
 *          'action' => 'read',
 *      ]);
 *
 * Use addGet, addPost, addPut etc to match a HTTP verb.
 * Use setSecure to limit to secure connections.
 *
 * More examples at https://github.com/auraphp/Aura.Router
 *
 */

define('REGEX_ALPHA', '[a-zA-Z+]+');
define('REGEX_ALNUM', '[a-zA-Z0-9]+');
define('REGEX_ALNUM_DASH', '[a-zA-Z0-9\-]+');
define('REGEX_INT', '[0-9]{1,10}');

$router->add('home', '/')
    ->setValues([
            'controller' => 'home',
            'method' => 'helloWorld'
     ]);