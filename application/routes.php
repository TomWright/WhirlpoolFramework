<?php

/**
 * Routing Examples
 *
 * If a user comes in on this url: site.com/my-page
 * And we want to execute a method in this controller: GeneralController
 * With a name of: myPageAction
 * We would add the following route definition.
 * $r->addRoute('GET', '/my-page', 'general@myPage');
 * If no method is specified the default will be used which can be found in `config/routing.php`.
 * For more help with creating routes please see [FastRoute](https://github.com/nikic/FastRoute)
 */

define('REGEX_ALPHA', '[a-zA-Z+]+');
define('REGEX_ALNUM', '[a-zA-Z0-9]+');
define('REGEX_ALNUM_DASH', '[a-zA-Z0-9\-]+');
define('REGEX_INT', '[0-9]{1,10}');

$r->addRoute('GET', '/', 'home@helloWorld');