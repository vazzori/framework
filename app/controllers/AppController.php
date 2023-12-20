<?php

namespace app\controllers;

use app\models\Main;
use vendor\core\base\Controller;
use R;

class AppController extends Controller
{

    public $menu;

    public function __construct($route)
    {
        parent::__construct($route);
        new Main();
        $this->menu = R::findAll('category');
    }

}