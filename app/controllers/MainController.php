<?php

namespace app\controllers;

use app\models\Main;
use R;

class MainController extends AppController
{

//    public $layout = 'main';

    public function indexAction(){
//        $model = new Main;
        $posts = R::findAll('posts');
        $menu = $this->menu;
        $hi = 'hi';
        $this->set(compact('hi', 'posts', 'menu'));
    }

}