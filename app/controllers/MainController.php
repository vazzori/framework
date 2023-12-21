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
        $this->setMeta('INDEX MAIN', 'desc', 'keywords');
        $meta = $this->meta;
        $this->set(compact( 'posts', 'menu', 'meta'));
    }

    public function testAction(){
        $this->layout = 'test';
    }


}