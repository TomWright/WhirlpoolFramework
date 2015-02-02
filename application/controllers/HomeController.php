<?php

use Whirlpool\BaseController;

class HomeController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function helloWorldAction()
    {
        echo 'Hello World';
    }

}