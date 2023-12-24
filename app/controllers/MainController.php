<?php

namespace app\controllers;

use app\models\Main;
use vendor\core\App;
use R;

class MainController extends AppController
{

//    public $layout = 'main';

    public function indexAction(){
//        App::$app->getList();
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