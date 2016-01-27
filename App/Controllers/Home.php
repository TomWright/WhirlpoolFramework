<?php

namespace App\Controllers;

use Whirlpool\BaseController;

class Home extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function helloWorldAction()
    {
        $this->displayView('helloWorld', array(
            'name' => 'Tom',
            'age' => 22,
        ));
    }

}