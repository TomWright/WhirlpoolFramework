<?php

namespace App\Controllers;

use Whirlpool\BaseController;

class ErrorController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function indexAction()
    {
        echo '404 not found';
    }

}