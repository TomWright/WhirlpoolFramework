<?php

use Whirlpool\BaseController;

class TestController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        echo 'test sub - indexs';
    }

}